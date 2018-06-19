<?php require_once("db_connection.php"); 


 
?>

<?php

//2-assemble a mysql query
$input=$_REQUEST["input"];
$query="SELECT user_id,user_name,user_email,user_image from users where user_name like '%{$input}%' or user_email like '%{$input}%' order by user_name LIMIT 5";
$result=mysqli_query($connection,$query);

//test if there is a query 
if($result){ //success
    $rows = array();
    while($r=mysqli_fetch_assoc($result)){
        $rows[]=$r;
    }
    echo json_encode($rows);
}
else{ //fail
echo($query);
 	die("query error");
  
}
//4-release returned data 
//mysqli_free_result($result);

//5-close db connection
mysqli_close($connection);
?>