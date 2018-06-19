<?php require_once("db_connection.php"); 


 
?>

<?php

//2-assemble a mysql query
$requestId=$_REQUEST["request_id"];
$query="DELETE FROM friend_request ";
$query.="WHERE id={$requestId}";
$result=mysqli_query($connection,$query);


//test if there is a query 
if(!$result){
	die("query error");
}

//4-release returned data 
//mysqli_free_result($result);

//5-close db connection
mysqli_close($connection);
?>