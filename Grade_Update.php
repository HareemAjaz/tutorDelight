<script type="text/javascript">
    
    function InvalidSID()
	{
		alert("STUDENT ID DOES NOT Exist!");
	}
    
    function InvalidCID()
	{
		alert("COURSE ID DOES NOT Exist!");
	}
	
	function InvalidTID()
	{
		alert("TEACHER ID DOES NOT Exist!");
	}
	
	function InvalidENROLL()
	{
		alert("STUDENT IS NOT ENROLLED IN THE SPECIFIED COURSE!");
	}
	
	function InvalidTEACH()
	{
		alert("YOU DO NOT TEACH THE SPECIFIED COURSE!");
	}
	function Invalidgrade()
	{
		alert("Grade can not be more than 100!");
	}
    	
  </script>
<?php

require("conection/connect.php");

$id="";
$opr="";

if(isset($_GET['opr']))
	$opr=$_GET['opr'];

if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];


if (isset($_POST['Submit']))
	{	
		
		
		$SID = $_POST["ID"];
		$CID = $_POST["CID"];
		$GRADE = $_POST["grade"];
		$TID = $_POST["TID"];
		
		
		$msg = "";
		
		
		$sql1 = mysql_query("select * from student where SID = '$SID' ");
		$count = mysql_num_rows($sql1);
		$sql2 = mysql_query("select * from course where CID = '$CID' ");
		$count1 = mysql_num_rows($sql2);
		$sql3 = mysql_query("select * from teacher where TID = '$TID'");
		$count2 = mysql_num_rows($sql3);
		$sql4 = mysql_query("select * from enroll where SID = '$SID' and CID = '$CID' ");
		$count4 = mysql_num_rows($sql4);
		$sql5 = mysql_query("select * from teach where TID = '$TID' and CID = '$CID' ");
		$count5 = mysql_num_rows($sql5);
		$sql6 = mysql_query("select * from grade_report where SID = '$SID' AND CID = '$CID'");
		$count6 = mysql_num_rows($sql6);
		if($GRADE > 100)
		{
			?>
			<script type="text/javascript">
    
             Invalidgrade()
	          
     
            </script> <?php
		}
		if ( $count == 0)
		{
			?>
			<script type="text/javascript">
    
             InvalidSID()
	          
     
            </script> <?php
			
		}
		else if ($count1 == 0)
		{
						?>
			<script type="text/javascript">
    
             InvalidCID()
	          
     
            </script> <?php
		}
		else if ($count2 == 0)
		{
						?>
			<script type="text/javascript">
    
             InvalidTID()
	          
     
            </script> <?php
		}
		else if ($count4 == 0)
		{
						?>
			<script type="text/javascript">
    
             InvalidENROLL()
	          
     
            </script> <?php
		}
		else if ($count5 == 0)
		{
			
						?>
			<script type="text/javascript">
    
             InvalidTEACH()
	          
     
            </script> <?php
		}
		else if ($count6 != 0)
		{
			$sql = mysql_query("Update Grade_Report set grade = '$GRADE' where SID = '$SID' and CID = '$CID' ");
			if($sql == true)
			{
				echo "Grade Updated" ;
			}
		}
		else
		{
			
	        
			$sql = mysql_query("INSERT INTO Grade_Report( SID , CID , grade  ) 
		    VALUES ('$SID' , '$CID' , '$GRADE') ");
			if($sql ==  true)
			{
				echo "Grade Report Updated";
			}
		
			
		    
		}
		


	
	}	

?>




<html>
<head>
<title>Tutor Delight</title>
<style type="text/css">
h3{font-family: Calibri; font-size: 26pt; font-style: normal; font-weight: bold; color:#2E2E2E;
text-align: center;}
table{font-family: Calibri; color:white; font-size: 15pt; font-style: normal;
text-align:; background-color: #2E2E2E; opacity:0.7;}
table.inner{border: 13px}
body{
	background-image:url(img-large1.jpg);
	background-repeat:no-repea;
	background-size:cover;
	}
img {max-height:200px;
	      max-width:200px;}
</style>
</head>
 
<body>
    
<!----- Register---------------------------------------------------------->
       
<h3>Enter Student Information</h3>
<form method="POST" enctype = "multipart/form-data">
 
<table align="center" cellpadding = "10">
 
 
<!----- First Name ---------------------------------------------------------->

<tr>
<td>SID</td>
<td><input type="text" name="ID" maxlength="30"/>
(max 30 characters a-z and A-Z)
</td>
</tr>
 
<!----- User Name ---------------------------------------------------------->

<!--password------------------------------------------------------------>


<!----- Gender ----------------------------------------------------------->


<!----- Date Of Birth -------------------------------------------------------->
<!----- country ----->

 
 <!-----------------Profession----------->

<!---------Degree--------->
<tr>
<td>Course ID</td>

<td><input type="text" name="CID" maxlength="10" /></td>
</tr>

<!----- Email Id ---------------------------------------------------------->
<tr>
<td>Enter your ID</td>

<td><input type="text" name="TID" maxlength="10" /></td>
</tr>
<tr>
<td>Grade</td>

<td><input type="text" name="grade" maxlength="10" /></td>
</tr>
 
 <tr>
<td colspan="2" align="center">
<input type="submit" name="Submit" value="Submit">
<input type="reset" name="Reset" value="Reset">
</td>
</tr>
 <!--input pic--
<tr>
<td>Upload Your Pic</td>
<td>
<form action="demo_form.asp">
<input type="file" name="Upload_pic" maxlength="10" />
-->
<tr>
