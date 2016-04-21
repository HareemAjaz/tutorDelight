<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Tutor Delight : Admin Workbench</title>

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
?>


<!-- Page Content -->
<div class="container" id="Myborder">

<!-- 0th Row All courses -->

 <div class="row" align="center">
   <br><h1>All Courses</h1>
    <div id="spacer4"></div>
    <div class="jumbotron" align="center" id="Lectures_Bar">
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
</div>
<!-- END 0th Row All courses -->

<!-- 1st Row All courses -->

  <div class="row" align="center">
    <br><h1>All Courses <a href="graph/graph1.php">(Click To See Report)</a></h1>
    
    <div class="jumbotron" id="Lectures_Bar"> 
    <div id="spacer4"></div>

    <form method ="POST" action="graph/graph.php">
       
<?php
//All Courses Gallery (See Graphs)
//$sql = "SELECT course.name, course.CID FROM course";
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
      //echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type='submit' id='CoursesDisplay' name='CourseToDisplay'>". $row["name"]."</button>";
        $tempVal=$row["course_name"];
      echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='submit' id='CoursesDisplay' name='CourseToDisplay' value ='$tempVal'></button>";  
  }

} else {
    echo "No registered Courses";
}
echo "<br><br></span>";


?>
   </form>
  </div>
  </div>
<!-- 1st Row Ends-->
<hr>
<!--2nd Row Starts Enroll A Student-->

<div class="row" align="center">
 <h1>Enroll A Student in Course</h1>
  <div class="col-lg-4"></div><!--space waste-->

  <div class="col-lg-4">
 
    <div class="jumbotron">
      <form method="POST">
      <tr>
        <td><label>Course ID:  &nbsp;&nbsp;</label><input type="text" name="CourseID"/></td>
      </tr>
      <br><br>
      <tr>
        <td><label>Student ID:  &nbsp;&nbsp;</label><input type="text" name="StudentID"/></td>
      </tr>
      <br><br><br>
      <input type="Submit" name="Submit" value="Enroll Student" id="RegisterButton">

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
        $Student_ID = $_POST["StudentID"];
            
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
  <div class="col-lg-4"></div><!--space waste-->
  </div><!--row-->

<!--New Row Starts-->

<div class="row" align="center">

<h1>Students Fee Dues Info</h1>

<div class="col-lg-4"></div><!--space waste-->

<div class="col-lg-4" align="center">
 
  <div class="Jumbotron">
      
      <?php
      require("conection/connect.php");


        $msg="";
        $id="";
        $opr="";
        if(isset($_GET['opr']))
        $opr=$_GET['opr'];
        
      if(isset($_GET['rs_id']))
        $id=$_GET['rs_id'];
        
        if($opr=="del")
      {
        $del_sql1=mysql_query("DELETE FROM teach WHERE CID=$id");
        $del_sql=mysql_query("DELETE FROM course WHERE CID=$id");
        if($del_sql && $del_sql1)
          $msg="1 Record Deleted... !";
        else
          $msg="Could not Delete :".mysql_error();  
            
      }


      else if ($opr=="pro")
      {
        $sql_upd=mysql_query("SELECT * FROM course WHERE CID=$id");
        $rs_upd=mysql_fetch_array($sql_upd);
        ?>
        <h2><?php echo $rs_upd['Name'];?></h2>
        <h3><?php echo "  Lectures ";?></h3>
        <?php
        
        //  echo '<img height="300" width="300" src="data:image;base64,'.$rs_upd[2].' ">';
        
        $seq=mysql_query("Select * from lecture where CID=$id");

        while($row=mysql_fetch_array($seq))
        {
          ?>
          <h3><?php echo $row['Name']."  :  "?>
          
          <a href="<?php echo $row['Name']?>" >Download</a></h3>
      <?php
          }

      }

      else 
      {
      ?>    

      <form method="post">
      <table border = "1">
      <tr>
      <th>Student ID</th>
      <th>Student Name</th>
      <th>Course Name</th>
      <th>Fee Dues </th> 
      </tr>
       <?php

          require("conection/connect.php");
          $key="";
        if(isset($_POST['searchtxt']))
          $key=$_POST['searchtxt'];
        
        if($key !="")
          $sql_sel=mysql_query("SElECT * FROM course WHERE f_name  like '%$key%' or l_name like '%$key%'");
        else
           $sql_sel=mysql_query("SELECT * FROM ENROLL E , FEES F where E.CID = F.CID AND E.SID = F.SID");
           
          $i=0;
          while($row=mysql_fetch_array($sql_sel))
        {
          $tmp_id = $row['SID'];  
          $tmp_id1 = $row['CID'];
         // echo $tmp_id;
          $sql_sel1=mysql_query("SELECT * FROM STUDENT where SID = $tmp_id");
          $sql_sel2=mysql_query("SELECT Name FROM COURSE where CID = $tmp_id1");
          $sql_sel3=mysql_query("SELECT fee FROM FEES where SID = $tmp_id and CID = $tmp_id1");
          $row1=mysql_fetch_assoc($sql_sel1);
          $row2=mysql_fetch_assoc($sql_sel2);
          $row3=mysql_fetch_assoc($sql_sel3);
        
          $i++;
          ?>
            <tr bgcolor="<?php ?>">
                  
                  <h3><td><?php echo $row1['SID'] ;?></td><td><?php echo $row1['Name'];?></td><td><?php echo $row2['Name']; ?></td><td><?php echo " Rs.".$row3['fee'];?></td></h3>
                   
            </tr><?php  
          }
        
      ?>

      </table>
      </form>
      <?php
      }
      ?>
  </div>
</div>
    <div class="col-lg-4"></div><!--space waste-->

</div><!--3rd Row Ends-->

<hr>

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
