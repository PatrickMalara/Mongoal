<?php
session_start();

include 'connect.php';

$user = $_POST["NewUsername"];
$pass = $_POST["NewPassword"];

$query = "INSERT INTO `users`(`id`, `name`, `password`) VALUES (NULL, ?, ?)";
$stmt = $conn->prepare($query);
$params = [$user, $pass];
$success = $stmt->execute($params);

if($success){
    $query = "SELECT * FROM users WHERE name = ? AND password = ?";
    $stmt = $conn->prepare($query);
    $params = [$user, $pass];
    $success = $stmt->execute($params);
    if($success){
        $row = $stmt->fetch();
        $_SESSION["UserID"] = $row["id"];
        
        //Here we are giving this user the writing prompts
        $query ="INSERT INTO `writings`(`id`, `userId`, `prompt`, `writing`) VALUES (NULL, ?, 1, '');".
                "INSERT INTO `writings`(`id`, `userId`, `prompt`, `writing`) VALUES (NULL, ?, 2, '');".
                "INSERT INTO `writings`(`id`, `userId`, `prompt`, `writing`) VALUES (NULL, ?, 3, '');".
                "INSERT INTO `writings`(`id`, `userId`, `prompt`, `writing`) VALUES (NULL, ?, 4, '');".
                "INSERT INTO `writings`(`id`, `userId`, `prompt`, `writing`) VALUES (NULL, ?, 5, '');".
                "INSERT INTO `writings`(`id`, `userId`, `prompt`, `writing`) VALUES (NULL, ?, 6, '');".
                "INSERT INTO `writings`(`id`, `userId`, `prompt`, `writing`) VALUES (NULL, ?, 7, '');".
                "INSERT INTO `writings`(`id`, `userId`, `prompt`, `writing`) VALUES (NULL, ?, 8, '');".
                "INSERT INTO `writings`(`id`, `userId`, `prompt`, `writing`) VALUES (NULL, ?, 9, '');".
                "INSERT INTO `writings`(`id`, `userId`, `prompt`, `writing`) VALUES (NULL, ?, 10,'');";
        $stmt = $conn->prepare($query);
        $params = [ $row["id"], 
                    $row["id"], 
                    $row["id"], 
                    $row["id"], 
                    $row["id"], 
                    $row["id"], 
                    $row["id"], 
                    $row["id"], 
                    $row["id"], 
                    $row["id"]];
        $success = $stmt->execute($params);
    

        header("Location: goals.php");
    }
}else {
    header("Location: index.php");
}
?>