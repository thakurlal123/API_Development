<?php

$servername = "localhost";
$username = "root";
$password="Dauji@123";
$db = "poetrydb";


$conn = new mysqli($servername,$username,$password,$db);
 if($conn->connect_error ){
    die("connection failed: ".$conn->connect_error);

 }

 $query = "SELECT * FROM poetry";

 $result = $conn->query($query);

 $row = $result->fetch_all(MYSQLI_ASSOC);
 if(empty($row)){
   $response = array("status"=>"0","message"=>"your record is empty","data"=>$row);

 }
 else{
    $response = array("status"=>"1","message"=>"your record is not empty","data"=>$row);
 }

 echo json_encode($response);


?>