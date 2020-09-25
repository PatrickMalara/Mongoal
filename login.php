<?php
session_start();

include 'connect.php';

$user = $_POST["Username"];
$pass = $_POST["Password"];

$query = "SELECT * FROM users WHERE name = ? AND password = ?";
$stmt = $conn->prepare($query);
$params = [$user, $pass];
$success = $stmt->execute($params);

if($success){
    $row = $stmt->fetch();
    $_SESSION["UserID"] = $row["id"];
    header("Location: goals.php");
}else {
    header("Location: index.php");
}
?>
