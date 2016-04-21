<?php
require("conection/connect.php");
?>
<table>
<td><?php
$sender = $_GET['unameS'];
$i = 0;
mysql_query("update message set Status = $i where Sender= '$sender' ");
$sql=mysql_query("select * from message where sender = '$sender'");
while($row = mysql_fetch_array($sql))
{
	echo $row['Message'];
}
?></td>
</table><br />
Send a reply..
<form type="multipart/encryptdata" method="post">

Enter Text Message<textarea name="Text1" cols="40" rows="5" ></textarea><br />
<input type="submit" value="Send" name="submit">
</form>
<?php

if(isset($_POST['submit']))
{
	$unameF = $_GET['uname'];
	$unameT = $_GET['unameS'];
	$text = $_POST['Text1'];
	
	mysql_query("insert into message (Sender,Receiver,Message,status) value ('$unameF','$unameT','$text',1)");
}
?>
