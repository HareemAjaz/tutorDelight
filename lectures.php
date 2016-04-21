<!DOCTYPE html>
<html>
<!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Tutor Delight : Select Lecture</title>

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
  	background-color: #111;
  	padding-top: 20px;
  }
</style>

<body>
<?php

?>

<br>

<div class="jumbotron" id="page">
<h1> Select Lecture</h1>
<br>
		<?php 
		require("conection/connect.php");
		
  $Course_ID = $_GET['id'];
  $ID = $_GET['SID'];
  


	
		//$sql = "SELECT lecture.Lname, lecture.name FROM lecture, course where lecture.CID = course.CID AND course.name=$Course_ID";

		$sql = mysql_query("SELECT * FROM video,videolink where videolink.CID = '$Course_ID' AND videolink.VID = video.VID order by video.VID");

		

		if (mysql_num_rows($sql)>0) {
		    // output data of each row
		    while($row = mysql_fetch_array($sql)) {
		      
		      echo $row['VID']."&nbsp;&nbsp;";?>
		      <a href="ClassroomNU.php?VID=<?php echo $row['VID'];?>&SID=<?php echo $_GET['SID']  ;?>"><?php echo "<button type='button' id='LectureDisplay'>". $row['Vname']."</button><br><br>";?></a><?php  
		  }

		} else {
		    echo "No Lectures Available";
		}

		
		

		?>  
</div>
<!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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




