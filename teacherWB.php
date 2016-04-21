<!DOCTYPE html>
<html lang="en">
  <head>
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Tutor Delight : Teacher Workbench</title>

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

$Teacher_ID = $_GET['id'];

require("conection/connect.php");

// Create connection
    $conn = new mysqli("localhost","root","", "news") or die("No Connection");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

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
    $TID = $_GET["TID"];

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
      </script> 
<?php
    }
    if ( $count == 0)
    {
?>
      <script type="text/javascript">
             InvalidSID()
      </script> 
<?php
    }
    else if ($count1 == 0)
    {
?>
      <script type="text/javascript">
             InvalidCID()
      </script> 
<?php
    }
    else if ($count2 == 0)
    {
?>
      <script type="text/javascript">
    
             InvalidTID()
            
     
      </script> 
<?php
    }
    else if ($count4 == 0)
    {
?>
      <script type="text/javascript">    
             InvalidENROLL()
      </script> 
<?php
    }
    else if ($count5 == 0)
    {
?>
      <script type="text/javascript">
             InvalidTEACH()
      </script> 
<?php
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
              <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- LOGO -->
              <!-- TEXT BASED LOGO -->
              <a class="navbar-brand" href="index.php">Tutor <span>Delight</span></a>              
              <!-- IMG BASED LOGO  -->
               <!-- <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"></a>  -->            
                     
            </div>
            <div id="navbar" class="navbar-collapse collapse">
			    
                
              <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
			  <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Inbox<span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
				  <?php
				    require("conection/connect.php");
					$SID=$_GET['id'];
					$sql1 = mysql_query("select * from teacher where TID = '$SID'");
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
<!--=========== START BODY SECTION ================-->
<div class="container" align="center">
<!--=========== Start 1st Row - My Courses ================-->
  <div class="row">
      <h1>My Courses (Click To See Lectures)</h1>
      <div class="jumbotron">
 <div id="spacer4"></div>
 
        
            <?php
            //Registered Courses Gallery
//            $sql = "SELECT course.name, course.CID FROM course";
            
            $sql = "SELECT course.name , course.CID FROM course,teach,teacher where course.CID=teach.CID AND teach.TID=teacher.TID AND teacher.TID =$Teacher_ID";
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
                  //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' id='CoursesDisplay' name='CourseToDisplay'>". $row["name"]."</button>";
                    $tempVal=$row["name"];
					
                  ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href = "LectureUploadT.php?CID=<?php echo $row['CID']; ?>"><input type='submit' id='CoursesDisplay' name='CourseToDisplay' value =<?php echo $tempVal;?>></button><?php  
              }

            } else {
                echo "No registered Courses";
            }
            echo "<br><br></span>";


            ?>
           
          


      </div>    
  </div>
  <!--=========== END 1st Row - My Courses ================-->
<hr>
<!--=========== Start 2nd Row - Upload Lectures ================-->
  <div class="row">
      <h1>Upload Lecture</h1>
      <div class="jumbotron">
        
      </div>
    
  </div>
  <!--=========== END 2nd Row - Upload Lectures ================-->
<hr>
<!--=========== START 3rd Row - Update Grades ================-->
  <div class="row">
      <h1>Update Grades</h1>
      <div class="jumbotron">
        <!----- Register---------------------------------------------------------->
            <form method="POST" enctype = "multipart/form-data">
             
              <table align="center" cellpadding = "10">
             
            <tr>
              <th>Student ID: </th>
                <td><input type="text" name="ID" maxlength="30"/></td>
            </tr>
             
            <tr>
              <th>Course ID: </th>
                <td><input type="text" name="CID" maxlength="30"/></td>
            </tr>

           
            <tr>
              <th>Grade: </th>
                <td><input type="text" name="grade" maxlength="30"/></td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                  <input type="submit" name="Submit" value="Submit">
                  <input type="reset" name="Reset" value="Reset">
                </td>
            </tr>
            
            </table>
          </form>
      </div>
  </div>
  <!--=========== END 3rd Row - Update Grades=========== -->
</div><!--Container Ends-->
 
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
    <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
    ====================================================-->


  </body>
</html>