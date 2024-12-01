<?php

$host = "localhost";
$port = 3306;
$dbName = "udeverse";
$user = "root";
$password = "1234";

try {
    $pdo = new PDO("mysql: host=$host; port=$port; dbname=$dbName;", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "". $e->getMessage();
}