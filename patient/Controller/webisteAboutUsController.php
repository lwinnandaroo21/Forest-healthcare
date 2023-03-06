<?php

include "../Model/dbConnection.php";

$sql = $pdo->prepare("SELECT * FROM tbl_aboutus");
$sql->execute();
$aboutUs = $sql->fetchAll(PDO::FETCH_ASSOC);