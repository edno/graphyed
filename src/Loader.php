<?php

namespace edno\GraphYEd;

use \ReflectionMethod;
use \SimpleXMLElement;

use \Fhaculty\Graph\Graph;
use \Fhaculty\Graph\Attribute\AttributeAware;

class Loader extends \Graphp\GraphML\Loader
{

    private $ns = null;

    public function loadContents($contents)
    {
        $root = new SimpleXMLElement($contents);
        $loadXml = new ReflectionMethod($this, 'loadXml');
        $loadXml->setAccessible(true);
        $graph = $loadXml->invokeArgs($this, [$root]);

        $graph = $this->loadXmlYEd($graph, $root);

        $this->ns = static::getYEdXMLNamespace($root);

        return $graph;
    }

    protected function loadXmlYED(Graph $graph, SimpleXMLElement $root)
    {
        // parse all yEd attribute keys
        $keys = array();
        foreach ($root->key as $keyElem) {
            // case of yEd desktop editor (see issue #1)
            if(isset($keyElem['yfiles.type'])) {
                $keys[(string)$keyElem['id']] = array(
                    'name' => 'labels',
                    'type' => (string)$keyElem['yfiles.type'],
                    'for'  => (isset($keyElem['for']) ? (string)$keyElem['for'] : 'all'),
                    'default' => null
                );
            }
            // case of yEd online editor (see issue #1)
            if($keyElem['attr.name'] == 'NodeLabels' || $keyElem['attr.name'] == 'EdgeLabels') {
                $keys[(string)$keyElem['id']] = array(
                    'name' => 'labels',
                    'type' => (string)$keyElem['attr.name'],
                    'for'  => (isset($keyElem['for']) ? (string)$keyElem['for'] : 'all'),
                    'default' => null
                );
            }
        }

        // refresh all vertices with yEd attributes
        foreach ($root->graph->node as $nodeElem) {
            $vertex = $graph->getVertex((string)$nodeElem['id']);
            $this->loadAttributesYEd($nodeElem, $vertex, $keys);
        }

        // refresh all edges with yEd attributes
        // note this is note foolproof in the case of 2 edges with same source and target
        foreach ($root->graph->edge as $edgeElem) {
            $source = $graph->getVertex((string)$edgeElem['source']);
            $target = $graph->getVertex((string)$edgeElem['target']);
            $edges = $source->getEdgesTo($target);
            $this->loadAttributesYEd($edgeElem, $edges->getEdgeFirst(), $keys); // getEdgeFirst() to be reviewed
        }

        return $graph;
    }

    protected function loadAttributesYEd(SimpleXMLElement $xml, AttributeAware $target, array $keys)
    {
        // apply all data attributes for this element
        foreach ($xml->data as $dataElem) {
            if(isset($keys[(string)$dataElem['key']])) {
                $key = $keys[(string)$dataElem['key']];
                $target->setAttribute($key['name'], $this->castAttributeYEd($dataElem, $key['type']));
            }
        }
    }

    protected function castAttributeYEd(SimpleXMLElement $xml, string $type)
    {
        $xml->registerXPathNamespace('y', $this->ns);
        // cases of yEd desktop editor (see issue #1)
        if ($type == 'nodegraphics') {
            $result = $xml->xpath('.//y:NodeLabel');
        }
        if ($type == 'edgegraphics') {
            $result = $xml->xpath('.//y:EdgeLabel');
        }
        // case of yEd online editor (see issue #1)
        if ($type == 'NodeLabels' || $type == 'EdgeLabels') {
            $result = $xml->xpath('.//y:Label.Text');
        }
        \array_walk($result, function(&$element) {
          $element = (string)$element;
        });
        return $result;
    }

    protected static function getYEdXMLNamespace(SimpleXMLElement $xml, string $key = "y")
    {
        $namespaces = $xml->getNamespaces(true);

        if (\array_key_exists($key, $namespaces)) {
          return $namespaces[$key];
        } else {
          new \Exception("{$key} is not a valid namespace key for current XML document");
        }
    }
}
