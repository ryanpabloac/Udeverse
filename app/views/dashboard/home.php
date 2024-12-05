<?php
session_start();

if (!isset($_SESSION["user"])) {
    header("Location: ./acount/login.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Udeverse | Página Inicial</title>
    <link rel="shortcut icon" href="./../../assets/imgs/logo.png" type="image/x-png">
    <link rel="stylesheet" href="./../../assets/css/home.css">
</head>
<body>
<header id="header">
    <div id="logo"> < U<span>dev</span>erse /> </div>
    <div id="links">
        <a href="">Página Principal</a>
        <a href="">Favoritos</a>
    </div>
    <form action="./search.php" method="get">
        <input type="text" name="search" id="search" placeholder="Buscar...">
        <button type="submit">🔎</button>
    </form>
    <div id="acount">
        <img src="" alt="" id="profile">
        <span id="username"></span>
        if
    </div>
</header>     
</body>
</html>