<?php

namespace edno\GraphYEd;

use \ReflectionMethod;
use \SimpleXMLElement;

use \Fhaculty\Graph\Graph;
use \Fhaculty\Graph\Attribute\AttributeAware;

class Loader extends \Graphp\GraphML\Loader
{

    public function loadContents($contents)
    {
        $root = new SimpleXMLElement($contents);
        $loadXml = new ReflectionMethod($this, 'loadXml');
        $loadXml->setAccessible(true);
        $graph = $loadXml->invokeArgs($this, [$root]);

        $graph = $this->loadXmlYEd($graph, $root);

        return $graph;
    }

    protected function loadXmlYED(Graph $graph, SimpleXMLElement $root)
    {
        // parse all yEd attribute keys
        $keys = array();
        foreach ($root->key as $keyElem) {
            if(isset($keyElem['yfiles.type'])) {
                $keys[(string)$keyElem['id']] = array(
                    'name' => (string)$keyElem['yfiles.type'],
                    'type' => (string)$keyElem['yfiles.type'],
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
            $this->loadAttributesYEd($edgeElem, $edges->getEdgeFirst(), $keys);
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

    protected function castAttributeYEd($value, $type)
    {
        if ($type === 'nodegraphics' || $type === 'edgegraphics') {
            $attribute = new \stdClass();
            foreach ($value->children('y', true) as $xml) {
                if ($xml instanceof SimpleXMLElement) {
                    foreach ($xml as $name => $data) {
                        $attribute->{$name} = (string)$data;
                    }
                }
            }
            return $attribute;
        }
        return (string)$value;
    }
}
