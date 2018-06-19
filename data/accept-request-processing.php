<?php require_once("db_connection.php"); 


 
?>

<?php

//2-assemble a mysql query
$user=$_REQUEST["user_id"];
$sender=$_REQUEST["sender_id"];
$query="INSERT INTO friend_list(";
$query.="id_user,id_friend";
$query.=") VALUES (";
$query.=" {$user},{$sender}";
$query.=")";
$result=mysqli_query($connection,$query);

$query2="INSERT INTO friend_list(";
$query2.="id_friend,id_user";
$query2.=") VALUES (";
$query2.=" {$user},{$sender}";
$query2.=")";
$result2=mysqli_query($connection,$query2);

$requestId=$_REQUEST["request_id"];
$query3="DELETE FROM friend_request ";
$query3.="WHERE id={$requestId}";
$result3=mysqli_query($connection,$query3);

//test if there is a query 
if(!$result || !$result2 || !$result3){
	die("query error");
}

//4-release returned data 
//mysqli_free_result($result);

//5-close db connection
mysqli_close($connection);
?>