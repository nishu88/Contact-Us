<?php
$server="localhost";
$uname="root";
$password="";
$dbname="contact";

$contact=mysqli_connect($server,$uname,$password,$dbname) or die ("Database connection failed: " . mysql_error());

mysqli_select_db($contact,$dbname) or die(mysql_error());


$sql="CREATE TABLE users(
ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
reg_date TIMESTAMP,
Username VARCHAR(30) NOT NULL,
Email VARCHAR(50) NOT NULL,
Phone INT(50) NOT NULL,
Message varchar(200) NOT NULL
)";


if(mysqli_query($contact,$sql) === TRUE){echo "TABLE CREATED";}
else { echo "TABLE NOT CREATED";}

mysqli_close($contact);
?>