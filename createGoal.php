<!DOCTYPE html>
<?php
session_start();
include 'connect.php';


$title = $_POST['title'];
$outOf = $_POST['outOf'];
$monthYear = $_POST['monthYear'];

$query = "INSERT INTO `goals`(`id`, `user_id`, `title`, `outOf`, `curr`, `date`) VALUES (NULL, ?, ?, ?, 0, ?)";

$stmt = $conn->prepare($query);

$params = [$_SESSION['UserID'], $title, $outOf, $monthYear];

$success = $stmt->execute($params);

if(!$success){
    echo "Failed";
}

?>
