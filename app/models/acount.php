<?php
function subscribe($userInfo) {
    require  __DIR__ . "/../config/dbConfig.php";
    
    $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :pass)";
    $sql = $pdo->prepare($sql);

    $sql->bindValue(":username", $userInfo["username"]);
    $sql->bindValue(":email", $userInfo["email"]);
    $sql->bindValue(":pass", md5($userInfo["password"]));

    $sql->execute();
}
function authenticate($userInfo) {
    require  __DIR__ . "/../config/dbConfig.php";
    
    $sql = "SELECT username, password FROM users WHERE email = :email AND password = :pass";
    $sql = $pdo->prepare($sql);

    $sql->bindValue(":email", $userInfo["email"]);
    $sql->bindValue(":pass", md5($userInfo["password"]));

    $sql->execute();
    if ($sql->rowCount() > 0) {
        return $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location: ./../views/acount/login.php?msg=fail");
    }
        
}