<html>
<head>
<title>Main Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Classroom</title>
    <!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
   <link href="css/1-col-portfolio.css" rel="stylesheet">
   <link href="css/custom.css" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link href="themes/4/js-image-slider.css" rel="stylesheet" type="text/css" />
   <script src="themes/4/js-image-slider.js" type="text/javascript"></script>
   <link href="generic.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
   
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
</head>
<style type="text/css">
	#My_Button{
    padding: 5px 10px;
    border: #000000 1px solid;
    border-radius: 4px;
    background-color: #8B0000;
    color: #fff;
    width: 130px;
    height: 30px;
}
</style>

<body>

<div class="container" align="center">
	<div class="jumbotron">
	<h1>Send A Message To Teacher</h1>
		<form type="multipart/encryptdata" method="post"> 
		<h3>TO (username)</h3> 
		<input type="text" name="unameT" />
		<br><br><br>
		<textarea name="Text1" cols="40" rows="5" ></textarea>
		<br><br>
		<input type="submit" id="My_Button" value="Send" name="submit">
		</form>
	</div>
</div>

<?php
require("conection/connect.php");
if(isset($_POST['submit']))
{
	$unameT = $_POST['unameT'];
	$SID = $_GET['id'];
	$query = "select User_Name from student where SID = $SID";
	$unameF = mysql_fetch_assoc(mysql_query($query));
	$from = $unameF['User_Name'];
	$text = $_POST['Text1'];
	$sql = mysql_query("select * from teacher where User_Name='$unameT'");
	$counter1 = mysql_num_rows($sql);
	
	if($counter1>0)
	{
		$sql = mysql_query("insert into message (Sender,Receiver,Message,status) value ('$from','$unameT','$text',1)");
	}
	else if($counter1<1)
	{
		echo "invalid user name ";
	}
}
?>

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
</body>


</html>