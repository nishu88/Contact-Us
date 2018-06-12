<?php 

$server="localhost";
$uname="root";
$password="";
$dbname="contact";

$contact=mysqli_connect($server,$uname,$password,$dbname) or die ("Database connection failed: " . mysql_error());

mysqli_select_db($contact,$dbname) or die(mysql_error());

$sql="INSERT into users (Username,Email,Phone,Message)
	VALUES ('".$_GET["name"]."','".$_GET["email"]."','".$_GET["phone"]."','".$_GET["message"]."')";
    				if(mysqli_query($contact,$sql) === TRUE)
					{echo "MESSAGE SUBMITTED";}
				else
					{ echo "MESSAGE NOT SUBMITTED";}
						



mysqli_close($contact);





?>