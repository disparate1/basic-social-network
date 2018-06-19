<?php
//1-create connection to the database
DEFINE("DB_HOST","localhost"); 
DEFINE("DB_USER","root");
DEFINE("DB_PASS","");
DEFINE("DB_NAME","social_network");
$connection=mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
 //test if connection occurs
 if(mysqli_connect_errno()){
	 die("can not connect to db");
 }
?>

