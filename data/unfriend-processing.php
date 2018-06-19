<?php require_once("db_connection.php"); 


 
?>

<?php

//2-assemble a mysql query
$user=$_REQUEST["user_id"];
$sender=$_REQUEST["sender_id"];
$query="DELETE FROM friend_list ";
$query.="WHERE id_friend={$user}";
$result=mysqli_query($connection,$query);

$query2="DELETE FROM friend_list";
$query2.="WHERE id_user={$sender}";
$result2=mysqli_query($connection,$query2);

//test if there is a query 
if(!$result || !$result2){
	die("query error");
}

//4-release returned data 
//mysqli_free_result($result);

//5-close db connection
mysqli_close($connection);
?>