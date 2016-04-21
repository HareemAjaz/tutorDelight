
<?php

	require("conection/connect.php");
	
	//For Teacher
	$output = "";
	$sql1 = mysql_query("select * from course");
	$columns_total = mysql_num_fields($sql1);


	for ($i = 0; $i < $columns_total; $i++) 
	{
	$heading = mysql_field_name($sql1, $i);
	$output .= '"'.$heading.'",';
	}
	$output .="\n";


	while ($row = mysql_fetch_array($sql1)) {
	for ($i = 0; $i < $columns_total; $i++) {
	$output .='"'.$row["$i"].'",';
	}
	$output .="\n";
	}


	$filename = "Course.csv";
	header('Content-type: application/csv');

	$location = header('Content-Disposition: attachment; filename='.$filename);

	echo $output;
	exit
	
?>