<?php

use edno\GraphYEd\Loader;
// use  Graphp\GraphML\Loader;

class LoaderYEdTest extends TestCase
{
    private $loader;

    public function setUp()
    {
        $this->loader = new Loader();
    }

    public function testEmpty()
    {
        $data = <<<EOL
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<graphml xmlns="http://graphml.graphdrawing.org/xmlns" xmlns:java="http://www.yworks.com/xml/yfiles-common/1.0/java" xmlns:sys="http://www.yworks.com/xml/yfiles-common/markup/primitives/2.0" xmlns:x="http://www.yworks.com/xml/yfiles-common/markup/2.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:y="http://www.yworks.com/xml/graphml" xmlns:yed="http://www.yworks.com/xml/yed/3" xsi:schemaLocation="http://graphml.graphdrawing.org/xmlns http://www.yworks.com/xml/schema/graphml/1.1/ygraphml.xsd">
  <!--Created by yEd 3.19-->
  <key attr.name="Description" attr.type="string" for="graph" id="d0"/>
  <key for="port" id="d1" yfiles.type="portgraphics"/>
  <key for="port" id="d2" yfiles.type="portgeometry"/>
  <key for="port" id="d3" yfiles.type="portuserdata"/>
  <key attr.name="url" attr.type="string" for="node" id="d4"/>
  <key attr.name="description" attr.type="string" for="node" id="d5"/>
  <key for="node" id="d6" yfiles.type="nodegraphics"/>
  <key for="graphml" id="d7" yfiles.type="resources"/>
  <key attr.name="url" attr.type="string" for="edge" id="d8"/>
  <key attr.name="description" attr.type="string" for="edge" id="d9"/>
  <key for="edge" id="d10" yfiles.type="edgegraphics"/>
  <graph edgedefault="directed" id="G">
    <data key="d0"/>
  </graph>
  <data key="d7">
    <y:Resources/>
  </data>
</graphml>
EOL;

        $graph = $this->loader->loadContents($data);

        $this->assertCount(0, $graph->getVertices());
    }

    public function testSimpleGraph()
    {
        $data = <<<EOL
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<graphml xmlns="http://graphml.graphdrawing.org/xmlns" xmlns:java="http://www.yworks.com/xml/yfiles-common/1.0/java" xmlns:sys="http://www.yworks.com/xml/yfiles-common/markup/primitives/2.0" xmlns:x="http://www.yworks.com/xml/yfiles-common/markup/2.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:y="http://www.yworks.com/xml/graphml" xmlns:yed="http://www.yworks.com/xml/yed/3" xsi:schemaLocation="http://graphml.graphdrawing.org/xmlns http://www.yworks.com/xml/schema/graphml/1.1/ygraphml.xsd">
  <!--Created by yEd 3.19-->
  <key attr.name="Description" attr.type="string" for="graph" id="d0"/>
  <key for="port" id="d1" yfiles.type="portgraphics"/>
  <key for="port" id="d2" yfiles.type="portgeometry"/>
  <key for="port" id="d3" yfiles.type="portuserdata"/>
  <key attr.name="url" attr.type="string" for="node" id="d4"/>
  <key attr.name="description" attr.type="string" for="node" id="d5"/>
  <key for="node" id="d6" yfiles.type="nodegraphics"/>
  <key for="graphml" id="d7" yfiles.type="resources"/>
  <key attr.name="url" attr.type="string" for="edge" id="d8"/>
  <key attr.name="description" attr.type="string" for="edge" id="d9"/>
  <key for="edge" id="d10" yfiles.type="edgegraphics"/>
  <graph edgedefault="directed" id="G">
    <data key="d0" xml:space="preserve"/>
    <node id="n0">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="24.0" y="164.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="12.279296875" x="8.8603515625" xml:space="preserve" y="5.93359375">A<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <node id="n1">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="0.0" y="60.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="10.90234375" x="9.548828125" xml:space="preserve" y="5.93359375">B<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <node id="n2">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="60.0" y="103.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="12.302734375" x="8.8486328125" xml:space="preserve" y="5.93359375">C<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <node id="n3">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="136.0" y="88.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="12.98828125" x="8.505859375" xml:space="preserve" y="5.93359375">D<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <node id="n4">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="177.0" y="25.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="10.50390625" x="9.748046875" xml:space="preserve" y="5.93359375">E<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <node id="n5">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="210.0" y="108.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="10.43359375" x="9.783203125" xml:space="preserve" y="5.93359375">F<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <node id="n6">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="249.0" y="45.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="12.671875" x="8.6640625" xml:space="preserve" y="5.93359375">G<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <node id="n7">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="283.0" y="126.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="12.818359375" x="8.5908203125" xml:space="preserve" y="5.93359375">H<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <node id="n8">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="326.0" y="64.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="7.45703125" x="11.271484375" xml:space="preserve" y="5.93359375">I<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <node id="n9">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="393.0" y="98.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="7.732421875" x="11.1337890625" xml:space="preserve" y="5.93359375">J<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <node id="n10">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="364.0" y="0.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="11.833984375" x="9.0830078125" xml:space="preserve" y="5.93359375">K<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <edge id="e0" source="n1" target="n2">
      <data key="d10">
        <y:QuadCurveEdge straightness="0.1">
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:QuadCurveEdge>
      </data>
    </edge>
    <edge id="e1" source="n2" target="n3">
      <data key="d10">
        <y:QuadCurveEdge straightness="0.1">
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:QuadCurveEdge>
      </data>
    </edge>
    <edge id="e2" source="n3" target="n4">
      <data key="d10">
        <y:QuadCurveEdge straightness="0.1">
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:QuadCurveEdge>
      </data>
    </edge>
    <edge id="e3" source="n0" target="n2">
      <data key="d9"/>
      <data key="d10">
        <y:BezierEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:BezierEdge>
      </data>
    </edge>
    <edge id="e4" source="n3" target="n5">
      <data key="d9"/>
      <data key="d10">
        <y:BezierEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:BezierEdge>
      </data>
    </edge>
    <edge id="e5" source="n4" target="n6">
      <data key="d9"/>
      <data key="d10">
        <y:BezierEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:BezierEdge>
      </data>
    </edge>
    <edge id="e6" source="n6" target="n5">
      <data key="d9"/>
      <data key="d10">
        <y:BezierEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:BezierEdge>
      </data>
    </edge>
    <edge id="e7" source="n5" target="n7">
      <data key="d9"/>
      <data key="d10">
        <y:BezierEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:BezierEdge>
      </data>
    </edge>
    <edge id="e8" source="n6" target="n8">
      <data key="d9"/>
      <data key="d10">
        <y:BezierEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:BezierEdge>
      </data>
    </edge>
    <edge id="e9" source="n8" target="n7">
      <data key="d9"/>
      <data key="d10">
        <y:BezierEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:BezierEdge>
      </data>
    </edge>
    <edge id="e10" source="n8" target="n9">
      <data key="d9"/>
      <data key="d10">
        <y:BezierEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:BezierEdge>
      </data>
    </edge>
    <edge id="e11" source="n8" target="n10">
      <data key="d9"/>
      <data key="d10">
        <y:BezierEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:BezierEdge>
      </data>
    </edge>
  </graph>
  <data key="d7">
    <y:Resources/>
  </data>
</graphml>
EOL;

        $graph = $this->loader->loadContents($data);

        $this->assertCount(11, $graph->getVertices());
        $this->assertCount(12, $graph->getEdges());
    }

    public function testEdgeUndirected()
    {
        $data = <<<EOL
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<graphml xmlns="http://graphml.graphdrawing.org/xmlns" xmlns:java="http://www.yworks.com/xml/yfiles-common/1.0/java" xmlns:sys="http://www.yworks.com/xml/yfiles-common/markup/primitives/2.0" xmlns:x="http://www.yworks.com/xml/yfiles-common/markup/2.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:y="http://www.yworks.com/xml/graphml" xmlns:yed="http://www.yworks.com/xml/yed/3" xsi:schemaLocation="http://graphml.graphdrawing.org/xmlns http://www.yworks.com/xml/schema/graphml/1.1/ygraphml.xsd">
  <!--Created by yEd 3.19-->
  <key attr.name="Description" attr.type="string" for="graph" id="d0"/>
  <key for="port" id="d1" yfiles.type="portgraphics"/>
  <key for="port" id="d2" yfiles.type="portgeometry"/>
  <key for="port" id="d3" yfiles.type="portuserdata"/>
  <key attr.name="url" attr.type="string" for="node" id="d4"/>
  <key attr.name="description" attr.type="string" for="node" id="d5"/>
  <key for="node" id="d6" yfiles.type="nodegraphics"/>
  <key for="graphml" id="d7" yfiles.type="resources"/>
  <key attr.name="url" attr.type="string" for="edge" id="d8"/>
  <key attr.name="description" attr.type="string" for="edge" id="d9"/>
  <key for="edge" id="d10" yfiles.type="edgegraphics"/>
  <graph edgedefault="undirected" id="G">
    <data key="d0" xml:space="preserve"/>
    <node id="n0">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="24.0" y="164.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="12.279296875" x="8.8603515625" xml:space="preserve" y="5.93359375">A<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <edge id="e0" source="n0" target="n0" directed="false">
      <data key="d9"/>
      <data key="d10">
        <y:PolyLineEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0">
            <y:Point x="39.0" y="139.0"/>
          </y:Path>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="none"/>
          <y:BendStyle smoothed="false"/>
        </y:PolyLineEdge>
      </data>
    </edge>
    <edge id="e1" source="n0" target="n0">
      <data key="d9"/>
      <data key="d10">
        <y:BezierEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0">
            <y:Point x="-44.0" y="241.5"/>
            <y:Point x="141.0" y="268.5"/>
          </y:Path>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:BezierEdge>
      </data>
    </edge>
  </graph>
  <data key="d7">
    <y:Resources/>
  </data>
</graphml>
EOL;

        $graph = $this->loader->loadContents($data);

        $this->assertCount(2, $graph->getEdges());
        $this->assertInstanceOf('Fhaculty\Graph\Edge\Undirected', $graph->getEdges()->getEdgeFirst());
        $this->assertInstanceOf('Fhaculty\Graph\Edge\Undirected', $graph->getEdges()->getEdgeLast());
    }

    public function testEdgeDirected()
    {
        $data = <<<EOL
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<graphml xmlns="http://graphml.graphdrawing.org/xmlns" xmlns:java="http://www.yworks.com/xml/yfiles-common/1.0/java" xmlns:sys="http://www.yworks.com/xml/yfiles-common/markup/primitives/2.0" xmlns:x="http://www.yworks.com/xml/yfiles-common/markup/2.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:y="http://www.yworks.com/xml/graphml" xmlns:yed="http://www.yworks.com/xml/yed/3" xsi:schemaLocation="http://graphml.graphdrawing.org/xmlns http://www.yworks.com/xml/schema/graphml/1.1/ygraphml.xsd">
  <!--Created by yEd 3.19-->
  <key attr.name="Description" attr.type="string" for="graph" id="d0"/>
  <key for="port" id="d1" yfiles.type="portgraphics"/>
  <key for="port" id="d2" yfiles.type="portgeometry"/>
  <key for="port" id="d3" yfiles.type="portuserdata"/>
  <key attr.name="url" attr.type="string" for="node" id="d4"/>
  <key attr.name="description" attr.type="string" for="node" id="d5"/>
  <key for="node" id="d6" yfiles.type="nodegraphics"/>
  <key for="graphml" id="d7" yfiles.type="resources"/>
  <key attr.name="url" attr.type="string" for="edge" id="d8"/>
  <key attr.name="description" attr.type="string" for="edge" id="d9"/>
  <key for="edge" id="d10" yfiles.type="edgegraphics"/>
  <graph edgedefault="directed" id="G">
    <data key="d0" xml:space="preserve"/>
    <node id="n0">
      <data key="d6">
        <y:ShapeNode>
          <y:Geometry height="30.0" width="30.0" x="24.0" y="164.0"/>
          <y:Fill color="#FFCC00" transparent="false"/>
          <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
          <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="12.279296875" x="8.8603515625" xml:space="preserve" y="5.93359375">A<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
          <y:Shape type="rectangle"/>
        </y:ShapeNode>
      </data>
    </node>
    <edge id="e0" source="n0" target="n0" directed="true">
      <data key="d9"/>
      <data key="d10">
        <y:PolyLineEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0">
            <y:Point x="39.0" y="139.0"/>
          </y:Path>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="none"/>
          <y:BendStyle smoothed="false"/>
        </y:PolyLineEdge>
      </data>
    </edge>
    <edge id="e1" source="n0" target="n0">
      <data key="d9"/>
      <data key="d10">
        <y:BezierEdge>
          <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0">
            <y:Point x="-44.0" y="241.5"/>
            <y:Point x="141.0" y="268.5"/>
          </y:Path>
          <y:LineStyle color="#000000" type="line" width="1.0"/>
          <y:Arrows source="none" target="standard"/>
        </y:BezierEdge>
      </data>
    </edge>
  </graph>
  <data key="d7">
    <y:Resources/>
  </data>
</graphml>
EOL;

        $graph = $this->loader->loadContents($data);

        $this->assertCount(2, $graph->getEdges());
        $this->assertInstanceOf('Fhaculty\Graph\Edge\Directed', $graph->getEdges()->getEdgeFirst());
        $this->assertInstanceOf('Fhaculty\Graph\Edge\Directed', $graph->getEdges()->getEdgeLast());
    }

    public function testAttributeTypes()
    {
        $data = <<<EOL
<?xml version="1.0" encoding="UTF-8"?>
<graphml xmlns="http://graphml.graphdrawing.org/xmlns"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://graphml.graphdrawing.org/xmlns
     http://graphml.graphdrawing.org/xmlns/1.0/graphml.xsd">
  <key id="d0" for="node" attr.name="string" attr.type="string"></key>
  <key id="d1" for="node" attr.name="boolean" attr.type="boolean"></key>
  <key id="d2" for="node" attr.name="float" attr.type="float"></key>
  <key id="d3" for="node" attr.name="int" attr.type="int"></key>
  <graph id="G" edgedefault="undirected">
    <node id="n0">
      <data key="d0">text</data>
      <data key="d1">true</data>
      <data key="d2">4.5</data>
      <data key="d3">3</data>
    </node>
  </graph>
</graphml>
EOL;

        $graph = $this->loader->loadContents($data);

        $vertex = $graph->getVertices()->getVertexFirst();

        $this->assertEquals('n0', $vertex->getId());
        $this->assertSame('text', $vertex->getAttribute('string'));
        $this->assertSame(true, $vertex->getAttribute('boolean'));
        $this->assertSame(4.5, $vertex->getAttribute('float'));
        $this->assertSame(3, $vertex->getAttribute('int'));
    }

    public function testAttributeDefault()
    {
        $data = <<<EOL
<?xml version="1.0" encoding="UTF-8"?>
<graphml xmlns="http://graphml.graphdrawing.org/xmlns"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xsi:schemaLocation="http://graphml.graphdrawing.org/xmlns
     http://graphml.graphdrawing.org/xmlns/1.0/graphml.xsd">
  <key id="d0" for="node" attr.name="color" attr.type="string">
    <default>yellow</default>
  </key>
  <graph id="G" edgedefault="undirected">
    <node id="n0"/>
  </graph>
</graphml>
EOL;

        $graph = $this->loader->loadContents($data);

        $vertex = $graph->getVertices()->getVertexFirst();

        $this->assertEquals('n0', $vertex->getId());
        $this->assertEquals('yellow', $vertex->getAttribute('color'));
    }

    public function testYedAttributesFromDesktopSource()
    {
      $data = <<<EOL
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<graphml xmlns="http://graphml.graphdrawing.org/xmlns" xmlns:java="http://www.yworks.com/xml/yfiles-common/1.0/java" xmlns:sys="http://www.yworks.com/xml/yfiles-common/markup/primitives/2.0" xmlns:x="http://www.yworks.com/xml/yfiles-common/markup/2.0" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:y="http://www.yworks.com/xml/graphml" xmlns:yed="http://www.yworks.com/xml/yed/3" xsi:schemaLocation="http://graphml.graphdrawing.org/xmlns http://www.yworks.com/xml/schema/graphml/1.1/ygraphml.xsd">
<!--Created by yEd 3.19-->
<key attr.name="Description" attr.type="string" for="graph" id="d0"/>
<key for="port" id="d1" yfiles.type="portgraphics"/>
<key for="port" id="d2" yfiles.type="portgeometry"/>
<key for="port" id="d3" yfiles.type="portuserdata"/>
<key attr.name="url" attr.type="string" for="node" id="d4"/>
<key attr.name="description" attr.type="string" for="node" id="d5"/>
<key for="node" id="d6" yfiles.type="nodegraphics"/>
<key for="graphml" id="d7" yfiles.type="resources"/>
<key attr.name="url" attr.type="string" for="edge" id="d8"/>
<key attr.name="description" attr.type="string" for="edge" id="d9"/>
<key for="edge" id="d10" yfiles.type="edgegraphics"/>
<graph edgedefault="directed" id="G">
  <data key="d0" xml:space="preserve"/>
  <node id="n0">
    <data key="d5"/>
    <data key="d6">
      <y:ShapeNode>
        <y:Geometry height="30.0" width="30.0" x="-26.5" y="-37.5"/>
        <y:Fill color="#FFCC00" transparent="false"/>
        <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
        <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="12.279296875" x="8.8603515625" xml:space="preserve" y="5.93359375">A<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
        <y:Shape type="rectangle"/>
      </y:ShapeNode>
    </data>
  </node>
  <node id="n1">
    <data key="d5"/>
    <data key="d6">
      <y:ShapeNode>
        <y:Geometry height="30.0" width="30.0" x="-26.5" y="79.0"/>
        <y:Fill color="#FFCC00" transparent="false"/>
        <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
        <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="10.90234375" x="9.548828125" xml:space="preserve" y="5.93359375">B<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
        <y:Shape type="rectangle"/>
      </y:ShapeNode>
    </data>
  </node>
  <node id="n2">
    <data key="d5"/>
    <data key="d6">
      <y:ShapeNode>
        <y:Geometry height="30.0" width="30.0" x="90.0" y="79.0"/>
        <y:Fill color="#FFCC00" transparent="false"/>
        <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
        <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="12.98828125" x="8.505859375" xml:space="preserve" y="5.93359375">D<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
        <y:Shape type="rectangle"/>
      </y:ShapeNode>
    </data>
  </node>
  <node id="n3">
    <data key="d5"/>
    <data key="d6">
      <y:ShapeNode>
        <y:Geometry height="30.0" width="30.0" x="-26.5" y="195.5"/>
        <y:Fill color="#FFCC00" transparent="false"/>
        <y:BorderStyle color="#000000" raised="false" type="line" width="1.0"/>
        <y:NodeLabel alignment="center" autoSizePolicy="content" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" textColor="#000000" verticalTextPosition="bottom" visible="true" width="12.302734375" x="8.8486328125" xml:space="preserve" y="5.93359375">C<y:LabelModel><y:SmartNodeLabelModel distance="4.0"/></y:LabelModel><y:ModelParameter><y:SmartNodeLabelModelParameter labelRatioX="0.0" labelRatioY="0.0" nodeRatioX="0.0" nodeRatioY="0.0" offsetX="0.0" offsetY="0.0" upX="0.0" upY="-1.0"/></y:ModelParameter></y:NodeLabel>
        <y:Shape type="rectangle"/>
      </y:ShapeNode>
    </data>
  </node>
  <edge id="e0" source="n0" target="n1">
    <data key="d9"/>
    <data key="d10">
      <y:BezierEdge>
        <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
        <y:LineStyle color="#000000" type="line" width="1.0"/>
        <y:Arrows source="none" target="standard"/>
        <y:EdgeLabel alignment="center" configuration="AutoFlippingLabel" distance="2.0" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" preferredPlacement="anywhere" ratio="0.5" textColor="#000000" verticalTextPosition="bottom" visible="true" width="31.041015625" x="-45.5205078125" xml:space="preserve" y="34.18359375">AtoB<y:LabelModel><y:SmartEdgeLabelModel autoRotationEnabled="false" defaultAngle="0.0" defaultDistance="10.0"/></y:LabelModel><y:ModelParameter><y:SmartEdgeLabelModelParameter angle="0.0" distance="30.0" distanceToCenter="true" position="right" ratio="0.5" segment="0"/></y:ModelParameter><y:PreferredPlacementDescriptor angle="0.0" angleOffsetOnRightSide="0" angleReference="absolute" angleRotationOnRightSide="co" distance="-1.0" frozen="true" placement="anywhere" side="anywhere" sideReference="relative_to_edge_flow"/></y:EdgeLabel>
      </y:BezierEdge>
    </data>
  </edge>
  <edge id="e1" source="n1" target="n2">
    <data key="d9"/>
    <data key="d10">
      <y:BezierEdge>
        <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
        <y:LineStyle color="#000000" type="line" width="1.0"/>
        <y:Arrows source="none" target="standard"/>
        <y:EdgeLabel alignment="center" configuration="AutoFlippingLabel" distance="2.0" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" preferredPlacement="anywhere" ratio="0.5" textColor="#000000" verticalTextPosition="bottom" visible="true" width="31.75" x="27.375" xml:space="preserve" y="20.93359375">BtoD<y:LabelModel><y:SmartEdgeLabelModel autoRotationEnabled="false" defaultAngle="0.0" defaultDistance="10.0"/></y:LabelModel><y:ModelParameter><y:SmartEdgeLabelModelParameter angle="0.0" distance="30.0" distanceToCenter="true" position="right" ratio="0.5" segment="0"/></y:ModelParameter><y:PreferredPlacementDescriptor angle="0.0" angleOffsetOnRightSide="0" angleReference="absolute" angleRotationOnRightSide="co" distance="-1.0" frozen="true" placement="anywhere" side="anywhere" sideReference="relative_to_edge_flow"/></y:EdgeLabel>
      </y:BezierEdge>
    </data>
  </edge>
  <edge id="e2" source="n0" target="n2">
    <data key="d9"/>
    <data key="d10">
      <y:BezierEdge>
        <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
        <y:LineStyle color="#000000" type="line" width="1.0"/>
        <y:Arrows source="none" target="standard"/>
        <y:EdgeLabel alignment="center" configuration="AutoFlippingLabel" distance="2.0" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" preferredPlacement="anywhere" ratio="0.5" textColor="#000000" verticalTextPosition="bottom" visible="true" width="33.126953125" x="5.298183438451787" xml:space="preserve" y="55.22166062214464">AtoD<y:LabelModel><y:SmartEdgeLabelModel autoRotationEnabled="false" defaultAngle="0.0" defaultDistance="10.0"/></y:LabelModel><y:ModelParameter><y:SmartEdgeLabelModelParameter angle="0.0" distance="30.0" distanceToCenter="true" position="right" ratio="0.5" segment="0"/></y:ModelParameter><y:PreferredPlacementDescriptor angle="0.0" angleOffsetOnRightSide="0" angleReference="absolute" angleRotationOnRightSide="co" distance="-1.0" frozen="true" placement="anywhere" side="anywhere" sideReference="relative_to_edge_flow"/></y:EdgeLabel>
      </y:BezierEdge>
    </data>
  </edge>
  <edge id="e3" source="n1" target="n3">
    <data key="d9"/>
    <data key="d10">
      <y:BezierEdge>
        <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
        <y:LineStyle color="#000000" type="line" width="1.0"/>
        <y:Arrows source="none" target="standard"/>
        <y:EdgeLabel alignment="center" configuration="AutoFlippingLabel" distance="2.0" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" preferredPlacement="anywhere" ratio="0.5" textColor="#000000" verticalTextPosition="bottom" visible="true" width="31.064453125" x="-45.5322265625" xml:space="preserve" y="34.18359375">BtoC<y:LabelModel><y:SmartEdgeLabelModel autoRotationEnabled="false" defaultAngle="0.0" defaultDistance="10.0"/></y:LabelModel><y:ModelParameter><y:SmartEdgeLabelModelParameter angle="0.0" distance="30.0" distanceToCenter="true" position="right" ratio="0.5" segment="0"/></y:ModelParameter><y:PreferredPlacementDescriptor angle="0.0" angleOffsetOnRightSide="0" angleReference="absolute" angleRotationOnRightSide="co" distance="-1.0" frozen="true" placement="anywhere" side="anywhere" sideReference="relative_to_edge_flow"/></y:EdgeLabel>
      </y:BezierEdge>
    </data>
  </edge>
  <edge id="e4" source="n3" target="n2">
    <data key="d9"/>
    <data key="d10">
      <y:BezierEdge>
        <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0"/>
        <y:LineStyle color="#000000" type="line" width="1.0"/>
        <y:Arrows source="none" target="standard"/>
        <y:EdgeLabel alignment="center" configuration="AutoFlippingLabel" distance="2.0" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" preferredPlacement="anywhere" ratio="0.5" textColor="#000000" verticalTextPosition="bottom" visible="true" width="33.150390625" x="48.06900406154821" xml:space="preserve" y="-31.28419875285536">CtoD<y:LabelModel><y:SmartEdgeLabelModel autoRotationEnabled="false" defaultAngle="0.0" defaultDistance="10.0"/></y:LabelModel><y:ModelParameter><y:SmartEdgeLabelModelParameter angle="0.0" distance="30.0" distanceToCenter="true" position="right" ratio="0.5" segment="0"/></y:ModelParameter><y:PreferredPlacementDescriptor angle="0.0" angleOffsetOnRightSide="0" angleReference="absolute" angleRotationOnRightSide="co" distance="-1.0" frozen="true" placement="anywhere" side="anywhere" sideReference="relative_to_edge_flow"/></y:EdgeLabel>
      </y:BezierEdge>
    </data>
  </edge>
  <edge id="e5" source="n1" target="n0">
    <data key="d9"/>
    <data key="d10">
      <y:BezierEdge>
        <y:Path sx="0.0" sy="0.0" tx="0.0" ty="0.0">
          <y:Point x="-147.5" y="33.5"/>
        </y:Path>
        <y:LineStyle color="#000000" type="line" width="1.0"/>
        <y:Arrows source="none" target="standard"/>
        <y:EdgeLabel alignment="center" configuration="AutoFlippingLabel" distance="2.0" fontFamily="Dialog" fontSize="12" fontStyle="plain" hasBackgroundColor="false" hasLineColor="false" height="18.1328125" horizontalTextPosition="center" iconTextGap="4" modelName="custom" preferredPlacement="anywhere" ratio="0.5" textColor="#000000" verticalTextPosition="bottom" visible="true" width="31.041015625" x="-63.827004490147786" xml:space="preserve" y="-63.31371738791393">BtoA<y:LabelModel><y:SmartEdgeLabelModel autoRotationEnabled="false" defaultAngle="0.0" defaultDistance="10.0"/></y:LabelModel><y:ModelParameter><y:SmartEdgeLabelModelParameter angle="0.0" distance="30.0" distanceToCenter="true" position="right" ratio="0.5" segment="0"/></y:ModelParameter><y:PreferredPlacementDescriptor angle="0.0" angleOffsetOnRightSide="0" angleReference="absolute" angleRotationOnRightSide="co" distance="-1.0" frozen="true" placement="anywhere" side="anywhere" sideReference="relative_to_edge_flow"/></y:EdgeLabel>
      </y:BezierEdge>
    </data>
  </edge>
</graph>
<data key="d7">
  <y:Resources/>
</data>
</graphml>
EOL;

      $graph = $this->loader->loadContents($data);

      $vA = $graph->getVertices()->getVertexFirst();
      $vB = $graph->getVertex('n1');

      $this->assertEquals('n0', $vA->getId());
      $this->assertEquals('A', $vA->getAttribute('labels')[0]);
      $this->assertEquals('B', $vB->getAttribute('labels')[0]);

      $edgeA2B = $vA->getEdgesTo($vB)->getEdgeFirst();
      $this->assertEquals('AtoB', $edgeA2B->getAttribute('labels')[0]);
    }

  public function testYedAttributesFromOnlineSource()
  {
    $data = <<<EOL
<?xml version="1.0" encoding="UTF-8" standalone="no"?>
<!--Created by yFiles for HTML 2.2-EAP11-->
<graphml xsi:schemaLocation="http://graphml.graphdrawing.org/xmlns http://www.yworks.com/xml/schema/graphml.html/2.0/ygraphml.xsd " xmlns="http://graphml.graphdrawing.org/xmlns" xmlns:demostyle="http://www.yworks.com/yFilesHTML/demos/FlatDemoStyle/1.0" xmlns:bpmn="http://www.yworks.com/xml/yfiles-for-html/bpmn/2.0" xmlns:demotablestyle="http://www.yworks.com/yFilesHTML/demos/FlatDemoTableStyle/1.0" xmlns:uml="http://www.yworks.com/yFilesHTML/demos/UMLDemoStyle/1.0" xmlns:compat="http://www.yworks.com/xml/yfiles-compat-arrows/1.0" xmlns:GraphvizNodeStyle="http://www.yworks.com/yFilesHTML/graphviz-node-style/1.0" xmlns:VuejsNodeStyle="http://www.yworks.com/demos/yfiles-vuejs-node-style/1.0" xmlns:y="http://www.yworks.com/xml/yfiles-common/3.0" xmlns:x="http://www.yworks.com/xml/yfiles-common/markup/3.0" xmlns:yjs="http://www.yworks.com/xml/yfiles-for-html/2.0/xaml" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
	<key id="d0" for="node" attr.type="boolean" attr.name="Expanded" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/folding/Expanded">
		<default>true</default>
	</key>
	<key id="d1" for="node" attr.type="string" attr.name="url"/>
	<key id="d2" for="node" attr.type="string" attr.name="description"/>
	<key id="d3" for="node" attr.name="NodeLabels" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/NodeLabels"/>
	<key id="d4" for="node" attr.name="NodeGeometry" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/NodeGeometry"/>
	<key id="d5" for="all" attr.name="UserTags" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/UserTags"/>
	<key id="d6" for="node" attr.name="NodeStyle" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/NodeStyle"/>
	<key id="d7" for="node" attr.name="NodeViewState" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/folding/1.1/NodeViewState"/>
	<key id="d8" for="edge" attr.type="string" attr.name="url"/>
	<key id="d9" for="edge" attr.type="string" attr.name="description"/>
	<key id="d10" for="edge" attr.name="EdgeLabels" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/EdgeLabels"/>
	<key id="d11" for="edge" attr.name="EdgeGeometry" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/EdgeGeometry"/>
	<key id="d12" for="edge" attr.name="EdgeStyle" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/EdgeStyle"/>
	<key id="d13" for="edge" attr.name="EdgeViewState" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/folding/1.1/EdgeViewState"/>
	<key id="d14" for="port" attr.name="PortLabels" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/PortLabels"/>
	<key id="d15" for="port" attr.name="PortLocationParameter" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/PortLocationParameter">
		<default>
			<x:Static Member="y:FreeNodePortLocationModel.NodeCenterAnchored"/>
		</default>
	</key>
	<key id="d16" for="port" attr.name="PortStyle" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/PortStyle">
		<default>
			<x:Static Member="y:VoidPortStyle.Instance"/>
		</default>
	</key>
	<key id="d17" for="port" attr.name="PortViewState" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/folding/1.1/PortViewState"/>
	<key id="d18" attr.name="SharedData" y:attr.uri="http://www.yworks.com/xml/yfiles-common/2.0/SharedData"/>
	<data key="d18">
		<y:SharedData>
			<yjs:DefaultLabelStyle x:Key="1" textFill="BLACK">
				<yjs:DefaultLabelStyle.font>
					<yjs:Font fontSize="12" fontFamily="'Arial'"/>
				</yjs:DefaultLabelStyle.font>
			</yjs:DefaultLabelStyle>
			<yjs:Stroke x:Key="2" fill="{y:GraphMLReference 3}"/>
			<yjs:SolidColorFill x:Key="3" color="DarkOrange"/>
			<yjs:Stroke x:Key="4" fill="#FF336699"/>
			<yjs:PolylineEdgeStyle x:Key="5" stroke="{y:GraphMLReference 4}">
				<yjs:PolylineEdgeStyle.targetArrow>
					<yjs:Arrow type="TRIANGLE" scale="0.75" stroke="{y:GraphMLReference 4}" fill="#FF336699" cropLength="1"/>
				</yjs:PolylineEdgeStyle.targetArrow>
			</yjs:PolylineEdgeStyle>
		</y:SharedData>
	</data>
	<graph id="G" edgedefault="directed">
		<node id="n0">
			<data key="d2"><![CDATA[]]></data>
			<data key="d3">
				<x:List>
					<y:Label LayoutParameter="{x:Static y:InteriorLabelModel.Center}" Style="{y:GraphMLReference 1}">
						<y:Label.Text>A</y:Label.Text>
					</y:Label>
				</x:List>
			</data>
			<data key="d4">
				<y:RectD X="-144.5" Y="-285" Width="311" Height="50"/>
			</data>
			<data key="d6">
				<yjs:ShapeNodeStyle stroke="{y:GraphMLReference 2}" fill="{y:GraphMLReference 3}"/>
			</data>
			<port name="p0"/>
		</node>
		<node id="n1">
			<data key="d3">
				<x:List>
					<y:Label LayoutParameter="{x:Static y:InteriorLabelModel.Center}" Style="{y:GraphMLReference 1}">
						<y:Label.Text>B</y:Label.Text>
					</y:Label>
				</x:List>
			</data>
			<data key="d4">
				<y:RectD X="-144.5" Y="-160" Width="311" Height="50"/>
			</data>
			<data key="d6">
				<yjs:ShapeNodeStyle stroke="{y:GraphMLReference 2}" fill="{y:GraphMLReference 3}"/>
			</data>
			<port name="p0"/>
			<port name="p1"/>
			<port name="p2">
				<data key="d15">
					<y:FreeNodePortLocationModelParameter Ratio="0.9968051118210863,0.5"/>
				</data>
			</port>
		</node>
		<node id="n2">
			<data key="d3">
				<x:List>
					<y:Label LayoutParameter="{x:Static y:InteriorLabelModel.Center}" Style="{y:GraphMLReference 1}">
						<y:Label.Text>C</y:Label.Text>
					</y:Label>
				</x:List>
			</data>
			<data key="d4">
				<y:RectD X="-144.5" Y="-49" Width="311" Height="50"/>
			</data>
			<data key="d6">
				<yjs:ShapeNodeStyle stroke="{y:GraphMLReference 2}" fill="{y:GraphMLReference 3}"/>
			</data>
			<port name="p0"/>
			<port name="p1">
				<data key="d15">
					<y:FreeNodePortLocationModelParameter Ratio="0.9968051118210863,0.5"/>
				</data>
			</port>
		</node>
		<node id="n3">
			<data key="d3">
				<x:List>
					<y:Label LayoutParameter="{x:Static y:InteriorLabelModel.Center}" Style="{y:GraphMLReference 1}">
						<y:Label.Text>D</y:Label.Text>
					</y:Label>
				</x:List>
			</data>
			<data key="d4">
				<y:RectD X="241" Y="-49" Width="311" Height="50"/>
			</data>
			<data key="d6">
				<yjs:ShapeNodeStyle stroke="{y:GraphMLReference 2}" fill="{y:GraphMLReference 3}"/>
			</data>
			<port name="p0"/>
			<port name="p1">
				<data key="d15">
					<y:FreeNodePortLocationModelParameter Ratio="0.5,0.019230769230769218"/>
				</data>
			</port>
		</node>
		<edge id="e0" source="n0" target="n1" sourceport="p0" targetport="p0">
			<data key="d12">
				<y:GraphMLReference ResourceKey="5"/>
			</data>
		</edge>
		<edge id="e1" source="n1" target="n2" sourceport="p1" targetport="p0">
			<data key="d12">
				<y:GraphMLReference ResourceKey="5"/>
			</data>
		</edge>
		<edge id="e2" source="n2" target="n3" sourceport="p1" targetport="p0">
			<data key="d12">
				<y:GraphMLReference ResourceKey="5"/>
			</data>
		</edge>
		<edge id="e3" source="n1" target="n3" sourceport="p2" targetport="p1">
			<data key="d12">
				<y:GraphMLReference ResourceKey="5"/>
			</data>
		</edge>
	</graph>
</graphml>
EOL;

    $graph = $this->loader->loadContents($data);

    $vA = $graph->getVertices()->getVertexFirst();
    $vB = $graph->getVertex('n1');

    $this->assertEquals('n0', $vA->getId());
    $this->assertEquals('A', $vA->getAttribute('labels')[0]);
    $this->assertEquals('B', $vB->getAttribute('labels')[0]);
  }
}
