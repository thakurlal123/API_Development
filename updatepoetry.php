<?php

$servername = "localhost";
$username = "root";
$password="Dauji@123";
$db = "poetrydb";


$conn = new mysqli($servername,$username,$password,$db);
 if($conn->connect_error ){
    die("connection failed: ".$conn->connect_error);

 }

 $POETRY = $_POST['poetry_data'];
 $ID = $_POST['id'];

 $query = "UPDATE poetry SET poetry_data = '$POETRY' WHERE id = '$ID'";

 $result = $conn->query($query);

if($result){
    $response = array("status"=>"1","message"=>"poetry updated succesfully");
}
else{
    $response = array("status"=>"0","message"=>"poetry not updated succesfully");
}

echo json_encode($response);


?>