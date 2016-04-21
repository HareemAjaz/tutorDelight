<?php // content="text/plain; charset=utf-8"
 
define('__ROOT__', dirname(dirname(__FILE__)));
require_once ('jpgraph.php');
require_once ('jpgraph_line.php');
require_once ('jpgraph_error.php');
 
 
$x_axis = array();
$y_axis = array();
$i = 0;
 require("connect.php");
 
$result = mysql_query("SELECT * FROM grade_report");
 
 
while($row = mysql_fetch_array($result)) {
$x_axis[$i] =  $row['CID'];
$y_axis[$i] = $row['GRADE'];
    $i++;
 
}
     
     
 
     
   // mysqli_close($con);
 
 
 
$graph = new Graph(800,500);
$graph->img->SetMargin(40,40,40,40); 
$graph->img->SetAntiAliasing();
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->title->Set("Example of line centered plot");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
 
 
// Use 20% "grace" to get slightly larger scale then min/max of
// data
$graph->yscale->SetGrace(0);
 
 
$p1 = new LinePlot($y_axis);
$p1->mark->SetType(MARK_FILLEDCIRCLE);
$p1->mark->SetFillColor("red");
$p1->mark->SetWidth(4);
$p1->SetColor("blue");
$p1->SetCenter();
$graph->Add($p1);
 
$graph->Stroke();
 
?>