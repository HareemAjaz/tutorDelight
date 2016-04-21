<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Tutor Delight : Student Workbench</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="cssstyles.css" />
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
<script type="text/javascript">
    
     function confirmation(msg)
      {
	    alert(msg);
	  }

</script>

<style type="text/css">
  #Myborder{
    border-style: inset;
    border-width: 3px;
  } 
  #spacer{
    padding-bottom: 100px;
  }

  #spacer2{
    padding-bottom: 20px;
  }
  
    #spacer4{
    padding-bottom: 50px;
  }

  #CoursesDisplay{
    min-width: 150px;
    min-height: 150px;
  }
  
  #LectureDisplay{
    min-width: 100px;
    min-height: 40px;
    padding-left: 5px;
    padding-right: 5px;
  }

#Lectures_Bar{
  background-color: silver; 
  vertical-align: center;
  text-align: center;
  overflow: scroll;
  min-height: 300px;
  max-height: 550px;
}

#RegisterButton{
	padding-left: 5px;
    padding-right: 5px;
	padding-top: 5px;
    padding-bottom: 5px;
}

</style>

  </head>
  <body>    

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
    <header id="header">
      <!-- BEGIN MENU -->
      <div class="menu_area">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  <div class="container">
            <div class="navbar-header">
            	<a class="navbar-brand" href="index.php">Tutor <span>Delight</span></a>              
            </div>
            
            <div id="navbar" class="navbar-collapse collapse">
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
               <li><a href="UpdateInfo.php">Update Information</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inbox<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
				  <?php
				    require("conection/connect.php");
					$SID=$_GET['id'];
					$sql1 = mysql_query("select * from student where SID = '$SID'");
					$uname = mysql_fetch_assoc($sql1);
					$result = $uname['User_Name'];
					$query=mysql_query("SELECT * FROM message WHERE Receiver='$result' order by MsgID ");
					
					if(!$query)
					{
						echo "No messages";
					}
					else
					{
						while($row = mysql_fetch_array($query))
						{
							if($row['Status'] == 1)
							{
								 ?>
						         <tr bgcolor="<?php ?>">
						         <li><a href="Inbox.php?uname=<?php echo $uname['User_Name'];?>&unameS=<?php echo $row['Sender'];?>"><?php echo $row['Sender'];?></a></li></tr><?php
							}
							else
							{
							    ?>
						         <tr bgcolor="<?php ?>">
						         <li><a href="Inbox.php?uname=<?php echo $uname['User_Name'];?>&unameS=<?php echo $row['Sender'];?>"><?php echo $row['Sender'];?></a></li></tr><?php	
							}
						
					    }
					}
				  ?>
					
					
                    			
                  </ul>
                				   
               <li><a href="index.php">Logout</a></li>                               
              </ul>           
            </div><!--/.nav-collapse -->
          </div>     
        </nav>  
      </div>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 


<div id="spacer"></div>
<?php 
// Create connection
$conn = new mysqli("localhost","root","", "news") or die("No Connection");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Std_ID = $_GET['id']
?>


<!-- Page Content -->
<!--Upper Row-->
 <div class="container" id="Myborder">
        <div class="row">
                <div class="col-lg-3">
						<?php  
						$sql = "SELECT name,SID,user_name FROM student where SID = $Std_ID";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						      echo "<label id='PersonalInfo' name='PersonalInfo'>".
						      "<br>".
						      "Student Name:&nbsp;".$row["name"]."<br><br>".
						      "Student ID: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["SID"]."<br><br>".
						      "User Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ".$row["user_name"].
						      "<br>".
						      "</label>";
						  }

						} else {
						    echo "Data Unavailable";
						}

						?>                
				</div>
                
                <div class="col-lg-3">
						<?php  
						$sql = "SELECT Email_Id,Address,degree FROM student where SID = $Std_ID";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						      echo "<label id='PersonalInfo' name='PersonalInfo'>".
						      "<br>".
						      "Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["Email_Id"]."<br><br>".
						      "Address: &nbsp;".$row["Address"]."<br><br>".
						      "Degree: &nbsp;&nbsp;&nbsp;".$row["degree"].
						      "<br>".
						      "</label>";
						  }

						} else {
						    echo "Data Unavailable";
						}

						?>                
				</div>


                <div class="col-lg-3">
						<?php  
						$sql = "SELECT Occupation,Country,dob FROM student where SID = $Std_ID";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						    // output data of each row
						    while($row = $result->fetch_assoc()) {
						      echo "<label id='PersonalInfo' name='PersonalInfo'>".
						      "<br>".
						      "Occupation: &nbsp;&nbsp;&nbsp;".$row["Occupation"]."<br><br>".
						      "Country:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row["Country"]."<br><br>".
						      "Date Of Birth: ".$row["dob"].
						      "<br>".
						      "</label>";
						  }

						} else {
						    echo "Data Unavailable";
						}

						?>                
				</div>

<div class="col-lg-1"></div><!--waste space-->

                <div class="col-lg-2">
                  	  <div align="center">
               			<img class="img-circle img-responsive img-center" style="width:70%" alt="" src= 	  
               			<?php  
								$sql = "SELECT pname FROM student where SID = $Std_ID";
								$result = $conn->query($sql);

								if ($result->num_rows > 0) {
								    // output data of each row
								    while($row = $result->fetch_assoc()) {
								      echo "img/AboutUs/".$row["pname"];
								  	 
								  }

								} 
								?>   
                      </div>
                      <div align="center">
                      </div>
                </div>
          </div>
</div>
<!-- 1st Row -->
<div class="container" >
  <div class="row">
    <div class="col-lg-12" align="center" id="Lectures_Bar">
        <br><h2>Select Registerd Course</h2>
    <div id="spacer4"></div>


       
<?php
//Registered Courses Gallery
$sql = "SELECT course.name, course.CID FROM enroll,course where SID = $Std_ID AND enroll.CID = course.CID";
$result = $conn->query($sql);
$SID = $_GET['id'];
echo "<span>";
$line_breaker=0;    
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $line_breaker=$line_breaker+1;
        if($line_breaker==6)//this is actually 5
        {
        $line_breaker=0;
          echo "<br><br><br><br>";
        }
      //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' id='CoursesDisplay' name='CourseToDisplay'>". $row["name"]."</button>";
        $tempVal=$row["name"];
		
      ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "lectures.php?id=<?php echo $row['CID'];?>&SID=<?php echo $SID; ?>"><input type='submit' id='CoursesDisplay' name='CourseToDisplay' value ='<?php echo $tempVal;?>'></button></a><?php
  }

} else {
    echo "No registered Courses";
}
echo "<br><br></span>";
?>


   <
</div>
<!-- 1st Row Ends-->

<!-- 2nd Row -->
<div class="container" id="Myborder">
  <div class="row">
    <div class="col-lg-12" align="center" id="Lectures_Bar">
        <br><h2>All Courses</h2>
    <div id="spacer4"></div>

<?php
//All Course Gallery
$sql = "SELECT course.name as 'course_name', course.CID, teacher.name as 'teacher_name' FROM course,teach,teacher where course.CID=teach.CID AND teach.TID=teacher.TID";
$result = $conn->query($sql);
echo "<span>";
$line_breaker=0;    
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $line_breaker=$line_breaker+1;
        if($line_breaker==6)//this is actually 5
        {
        $line_breaker=0;
          echo "<br><br><br><br>";
        }
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' id='CoursesDisplay' name='CourseToDisplay'>"."Course: ".$row["course_name"]."<br>"."Course ID: ".$row["CID"]."<br>"."Teacher: ".$row["teacher_name"]."<br>"."</button>";
  	  //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' id='CoursesDisplay' name='CourseToDisplay'>"."Course Name: ".$row["Lname"]."<br>"."Course ID: ".$row["CID"]."</button>";
  	  	  	
  }

} else {
    echo "No Available Courses";
}
echo "<br><br></span>";
?>
</div>
<!-- 2nd Row Ends-->


<div class="row" align="center"><!--3rd Row Starts-->
	<div class="col-lg-4">
	</div>

 	<div class="col-lg-4">
 
 		<div class="jumbotron">
			<form method="POST">
			<tr>
			  <td><label>Course ID:  &nbsp;&nbsp;</label><input type="text" name="CourseID"/></td>
			</tr>
			<br><br><br>
			<input type="Submit" name="Submit" value="Register" id="RegisterButton">

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
				
				$Course_ID = $_POST["CourseID"]; 
				$Student_ID = $Std_ID;//from top of page
						
			  $Sql2 = mysql_query("INSERT INTO enroll ( SID , CID ) VALUES ( '$Student_ID' , '$Course_ID')");
				if($Sql2==true)
				  {
			      $msg="Student Enrolled";
			      $query1="SELECT fee FROM course WHERE CID = $Course_ID";
			      list ($charges) = mysql_fetch_row(mysql_query($query1));
			        $fee1=($charges);//temp value
			        $Sql3=mysql_query("INSERT INTO fees (SID,CID,FEE) VALUES ('$Student_ID' , '$Course_ID', '$fee1')");
			            if($Sql3 == true)
			              {
			                $msg="Records Updated";
			              }
			            else
			              {
			                $msg="Could not Update :".mysql_error();
			              }  
			    }  
			  else
			    {
			      $msg="Could not Update :".mysql_error();
			    }
			?>
			  <script type="text/javascript">
			   var confirmation_msg = "<?php echo $msg; ?>";
			   confirmation(confirmation_msg);
			  </script>

			<?php
			}
			?>	 

		</div><!--Jumbotron ends-->
	</div> <!--col ends-->
	
	<div class="col-lg-4">	
	</div>
</div><!--3rd Row Ends-->
<hr>
<div class="row" align="center"><!--4rd Row Starts-->
	<div class="col-lg-3">
	</div>

 	<div class="col-lg-6">
	 <h1>Student Transcript</h1>
 		<div class="jumbotron">
			<table width = "400" border = "1" cellpadding = "10" cellspacing = "10">
				<tr>
				<th>Course Name</th>
				<th>Marks</th>
				</tr>
						<?php
						$Student_ID = $Std_ID;//from top of page
						$sql_sel=mysql_query("SELECT * from grade_report g , student S where S.SID like $Student_ID and S.SID = g.SID");
					    
						while($row1 = mysql_fetch_array($sql_sel))
						{
							$temp_id = $row1['CID'];
							$sql1 = mysql_query("select * from course where CID like $temp_id");
							$row = mysql_fetch_assoc($sql1);
						?>
					       <tr bgcolor="grey">
				            
							<h3 text-align ><td></h2><?php echo $row['Name'];?><h2><td><?php echo "   ".$row1['Grade'];?></td>
				            </tr>
				        <?php
						}
					  	?>				
			</table>

		</div><!--Jumbotron ends-->
	</div> <!--col ends-->
	
	<div class="col-lg-3">	
	</div>

</div><!--4th Row Ends-->

</div><!--container ends-->
        

    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>About Us</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </div>
            </div>
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Community</h3>
                <ul class="footer_widget_nav">
                  <li><a href="#">Our Tutors</a></li>
                  <li><a href="#">Our Students</a></li>
                  <li><a href="#">Our Team</a></li>
                  <li><a href="#">Forum</a></li>
                  <li><a href="#">News &amp; Media</a></li>
                </ul>
              </div>
            </div>
          
            <div class="col-ld-3  col-md-3 col-sm-3">
              <div class="single_footer_widget">
                <h3>Social Links</h3>
                <ul class="footer_social">
                  <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip"  href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip"  href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Linkedin" class="soc_tooltip"  href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip"  href="#"><i class="fa fa-youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
      <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>

  </body>
</html>
