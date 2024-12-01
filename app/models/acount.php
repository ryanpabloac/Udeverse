<?php
session_start(); 
function subscribe($userInfo) {
    require  __DIR__ . "/../config/dbConfig.php";
    
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :pass)";
    $sql = $pdo->prepare($sql);

    $sql->bindValue(":username", $userInfo["username"]);
    $sql->bindValue(":email", $userInfo["email"]);
    $sql->bindValue(":pass", md5($userInfo["password"]));

    $sql->execute();

    header("Location: ./../views/acount/login.php?msg=success");
}

if (!isset($_GET['type']) || empty($_GET['type'])) {
    header("Location: ./../views/acount/login.php");
    exit;
}

switch ($_GET["type"]) {
    case "subscription":
        subscribe($_SESSION['userData']);
        break;
        
    default:
        header("Location: ./../views/acount/subscribe.php?error=!create");
}