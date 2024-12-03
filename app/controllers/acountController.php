<?php
    session_start();
    $_SESSION["userData"] = $_POST;

    switch ($_GET['type']) {
        case "subscription":
            if ($_POST['password'] != $_POST['confirm-password']) {
                header("Location: ./../views/acount/create.php?error=dif-pass");
                exit;
            }
            header("Location: ./../models/acount.php?type=subscription");
        
        case "auth":
            header("Location: ./../models/acount.php?type=auth");
    }