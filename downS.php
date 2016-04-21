<?php

	
	require("conection/connect.php");
	//For student
	$output = "";
	
	$sql = mysql_query("select * from student");
	$columns_total = mysql_num_fields($sql);


	for ($i = 0; $i < $columns_total; $i++) 
	{
	$heading = mysql_field_name($sql, $i);
	$output .= '"'.$heading.'",';
	}
	$output .="\n";


	while ($row = mysql_fetch_array($sql)) {
	for ($i = 0; $i < $columns_total; $i++) {
	$output .='"'.$row["$i"].'",';
	}
	$output .="\n";
	}


	$filename = "Student.csv";
	header('Content-type: application/csv');

	$location = header('Content-Disposition: attachment; filename='.$filename);

	echo $output;
	exit
	
	
?>
