<?php
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/controller/jpgraph/jpgraph.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/cloud/controller/jpgraph/jpgraph_pie.php');
$data=array();
if(isset($_GET['present']) && isset($_GET['absent']))
{
$data[]=$_GET['present'];
$data[]=$_GET['absent'];
}
$graph=new Piegraph(350,350);
$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// Set A title for the plot
$graph->title->Set("Attendance Report");
$graph->SetBox(true);

// Create
$p1 = new PiePlot($data);
$p1->SetSize(0.28);
$p1->SetCenter(0.25,0.32);
$p1->SetLegends(array("Present","Absent"));

$graph->Add($p1);

$p1->ShowBorder(1,'#000000');
$p1->SetColor('black');
$p1->SetSliceColors(array('#2E2EFE','#FFBF00'));
$graph->Stroke();
?>