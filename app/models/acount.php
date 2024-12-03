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
    header("Location: ./../views/acount/login.php");
}
function authenticate($userInfo) {
    require  __DIR__ . "/../config/dbConfig.php";
    
    $sql = "SELECT username,password FROM users WHERE email = :email AND password = :pass";
    $sql = $pdo->prepare($sql);

    $sql->bindValue(":email", $userInfo["email"]);
    $sql->bindValue(":pass", md5($userInfo["password"]));

    $sql->execute();
    if ($sql->rowCount() > 0) {
        $_SESSION['user'] = $sql->fetch(PDO::FETCH_ASSOC);
        header("Location: ./../views/index.php");
    } else {
        header("Location: ./../views/acount/login.php?msg=fail");
    }
        
}

if (!isset($_GET['type']) || empty($_GET['type'])) {
    header("Location: ./../views/acount/login.php");
    exit;
}

switch ($_GET["type"]) {
    case "subscription":
        subscribe($_SESSION['userData']);
        break;
    case "auth":
        authenticate($_SESSION['userData']);
        break;
        
    default:
        header("Location: ./../views/acount/subscribe.php?error=!create");
}