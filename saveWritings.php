<!DOCTYPE html>
<?php
session_start();
include 'connect.php';


$prompts = [$_POST['prompt1'],
            $_POST['prompt2'],
            $_POST['prompt3'],
            $_POST['prompt4'],
            $_POST['prompt5'],
            $_POST['prompt6'],
            $_POST['prompt7'],
            $_POST['prompt8'],
            $_POST['prompt9'],
            $_POST['prompt10']];

for($i = 0; $i < 10; $i++){
    $query = "UPDATE `writings` SET `writing`= ? WHERE `userId`= ? AND `prompt` = ?";
    $stmt = $conn->prepare($query);
    $params = [$prompts[$i], $_SESSION["UserID"], ($i+1)];
    $success = $stmt->execute($params);
    if(!$success){
        die("Updating Failed");
    }
}
?>