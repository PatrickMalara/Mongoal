<!DOCTYPE html>
<?php
session_start();
include 'connect.php';

$id = $_POST['id'];

$query = "UPDATE goals SET curr = (curr+1) WHERE id = ?";
$stmt = $conn->prepare($query);
$params = [$id];
$success = $stmt->execute($params);

if(!$success){
	echo "Failed";
}


?>
