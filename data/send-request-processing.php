<?php require_once("db_connection.php"); 


 
?>

<?php

//2-assemble a mysql query
$user=$_REQUEST["user_id"];
$sender=$_REQUEST["sender_id"];
$query="INSERT INTO friend_request (";
$query.="user_id,sender_id,request";
$query.=") VALUES (";
$query.=" {$user},{$sender},1";
$query.=")";
$result=mysqli_query($connection,$query);
//test if there is a query 
if(!$result){
	//die("query error");
	echo("query error");
}
else echo("success");

//4-release returned data 
//mysqli_free_result($result);

//5-close db connection
mysqli_close($connection);
?>