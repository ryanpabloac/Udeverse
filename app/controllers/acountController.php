<?php
    require_once __DIR__ . "/../models/acount.php";

    $userInfo = [
        "username" => filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING),
        "password" => filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING),
        "confirmPassword" => filter_input(INPUT_POST, 'confirm-password', FILTER_SANITIZE_STRING)
    ];
    switch ($_GET['type']) {
        case "subscription":
            if ($userInfo['password'] != $userInfo['confirmPassword']) {
                header("Location: ./../views/acount/create.php?error=dif-pass");
                exit;
            }
            
            try {
                subscribe($userInfo);
                header("Location: ./../views/acount/login.php");
            } catch (PDOException) {
                header("Location: ./../views/acount/create.php?error=used-mail");
            }
            break; 
        
        case "auth":
            session_start();
            $_SESSION['user'] = authenticate($_POST);
            header("Location: ./../views/dashboard/home.php");
    }