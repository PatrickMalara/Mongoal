<?php
session_start();

include 'connect.php';
include 'writing.php';

$query = "SELECT * FROM writings WHERE userId = ?";

$stmt = $conn->prepare($query);

$params = [$_SESSION["UserID"]];

$success = $stmt->execute($params);

$writings = [];
if(!$success){
    die('Error with query');
} else {
    while($row = $stmt->fetch()){
        $temp = new Writing($row['id'], $row['userId'], $row['prompt'], $row['writing']);
        array_push($writings, $temp);
     }
 
     echo json_encode($writings);
}

?>
