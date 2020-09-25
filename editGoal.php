<!DOCTYPE html>
<?php
session_start();
include 'connect.php';

$delete = $_POST['delete'];
$id = $_POST['id'];
$title = $_POST['title'];
$outOf = $_POST['outOf'];
$curr = $_POST['curr'];
$monthYear = $_POST['monthYear'];

if($delete == "true"){
    $query = "DELETE FROM `goals` WHERE id = ?";
    $stmt = $conn->prepare($query);
    $params = [$id];
    $success = $stmt->execute($params);
    if(!$success){
        die("Delete Query Failed");
    }
}
else {
    $query = "UPDATE `goals` SET `title`= ? ,`outOf`= ?,`curr`= ?, `date`= ? WHERE `id` = ? ";
    $stmt = $conn->prepare($query);
    $params = [$title, $outOf, $curr, $monthYear, $id];
    $success = $stmt->execute($params);
    if(!$success){
        die("UPDATE Query Failed");
    }
}
?>