<?php
$hostname = "localhost";
$port = 3306;
$dbname = "forest_healthcare";
$username = "root";
$password = "";

   
$pdo = new PDO(
    "mysql:host=$hostname;port=$port;dbname=$dbname",
    $username,
    $password
);


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

