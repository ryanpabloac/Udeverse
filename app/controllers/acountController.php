<?php
    
    if ($_POST['password'] != $_POST['confirm-password']) {
        header("Location: ./../views/acount/create.php?error=dif-pass");
        exit;
    }
    if ($_GET['type'] == "subscription") {
        session_start();
        $_SESSION["userData"] = $_POST;
    }

    header("Location: ./../models/acount.php?type=subscription");