<?php

session_start();

include "../Model/dbConnection.php";

$sql = $pdo->prepare("
SELECT * FROM tbl_mentalhealth
");
$sql->execute();
$videoList = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($videoList);
$_SESSION["videoList"] = $videoList;