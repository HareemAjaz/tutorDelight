<!doctype html>
<html>
<head>
<title>Tutor Delight</title>
</head>
 <style type="text/css">
	#LectureDisplay{
    min-width: 100px;
    min-height: 40px;
    border-color: silver;
    padding-left: 5px;
    padding-right: 5px;
  }

  #page{
  	vertical-align: center;
  	text-align: center;    
  	height: 500px;
    overflow: scroll;
  }
  body{
  	padding-top: 20px;
  }
</style>

<body>
<?php 

		if($_POST["CourseToDisplay"]) 
		{
 		  $Course = $_POST['CourseToDisplay'];
		}
		else
			{
				echo "Incorrect Connection";
			}

require("connect.php");

// Create connection
		$conn = new mysqli("localhost","root","", "news") or die("No Connection");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

		$sql = "SELECT CID FROM course where course.name = '$Course'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		      $CID = $row["CID"];

		  }

		} else {
		    echo "No registered Courses";
		}

		$msg = "";

		//$CID = 7;

		$sql2 = mysql_query("select * from course where CID = '$CID' ");

		$count1 = mysql_num_rows($sql2);
	
		if ( $count1 == 0)
		{
			echo "No Students Registered in this Course";		
		}
		else
		{
		define('__ROOT__', dirname(dirname(__FILE__)));
        require ("jpgraph.php");
        require("jpgraph_line.php");
        require("jpgraph_error.php");
 
 
$x_axis = array();
$y_axis = array();
$i = 0;
$name1 = "";
 
$result = mysql_query("SELECT * FROM grade_report where CID = '$CID'");
$result2 = mysql_query("SELECT * FROM course where CID = '$CID' ");
$result1 = mysql_query("select distinct Name from student s, grade_report g where s.sid = g.sid ");
$row2 = mysql_fetch_assoc($result2);
$name1 = $row2['Name'];
while($row = mysql_fetch_array($result)) {
//$x_axis[$i] =  $row["SID"];
$y_axis[$i] = $row["Grade"];
//echo $y_axis[$i];
    $i++;
 
}
$i = 0;
while($row1 = mysql_fetch_array($result1)) {
$x_axis[$i] =  $row1["Name"];
//echo $x_axis[$i];
//$y_axis[$i] = $row1["Grade"];
    $i++;
 
}
 
 ?>
 <?php
 
$graph = new Graph(800,500);
$graph->img->SetMargin(40,40,40,40); 
$graph->img->SetAntiAliasing();
//$graph->img->SetImgFormat('jpeg');
$graph->SetScale("textlin");
$graph->SetShadow();
$graph->title->Set("Students Grades for $name1 ");  

$graph->title->SetFont(FF_FONT1,FS_BOLD);
 
 
// Use 20% "grace" to get slightly larger scale then min/max of
// data
$graph->yscale->SetGrace(0);
 
 
$p1 = new LinePlot($y_axis);
$p1->mark->SetType(MARK_FILLEDCIRCLE);
$p1->mark->SetFillColor("red");
$p1->mark->SetWidth(4);
$p1->SetColor("blue");
$graph->xaxis->SetTickLabels($x_axis);
$p1->SetCenter();
$graph->Add($p1);
//$test = $graph->Stroke(_IMG_HANDLER);
@unlink("graph.png");
$graph->Stroke(_IMG_AUTO);
//graph->StrokeCSIM();
//$graph->Stroke();


		}
?>
</form>

<br>

<div class="container" id="page">
	<img src = "graph.png" align="center" />
</div>
</body>
</html>