<?php
session_start();

include 'connect.php';
include 'goal.php';

$d = $_POST['date'];
$date =  str_replace("-","",$d);

$query = "SELECT * FROM goals WHERE user_id = ? AND EXTRACT(YEAR_MONTH FROM date) = ?";

$stmt = $conn->prepare($query);

$params = [$_SESSION["UserID"], $date];

$success = $stmt->execute($params);

$goals = [];
if(!$success){
    die('Error with query');
} else {
    while($row = $stmt->fetch()){
        $temp = new Goal($row['id'], $row['user_id'], $row['title'], $row['date'], $row['outOf'], $row['curr']);
        array_push($goals, $temp);
     }
 
     echo json_encode($goals);
}

?>
