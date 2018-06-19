<?php 
require_once("db_connection.php"); 


$idSender=$_REQUEST["sender"];
$idReciver=$_REQUEST["reciver"];
$title=$_REQUEST["title"];
$message=$_REQUEST["message"];


$query="INSERT INTO messages (";
$query.="sender,receiver,msg_sub,msg_topic";
$query.=") VALUES (";
$query.=" {$idSender},{$idReciver},'{$title}','{$message}'";
$query.=")";
$result=mysqli_query($connection,$query);
//test if there is a query 
if(!$result){
	//die("query error");
	echo("query error".$query);
}
?>