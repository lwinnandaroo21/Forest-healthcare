<?php

include "../Model/dbConnection.php";
$sql = $pdo->prepare("SELECT * FROM tbl_hospital WHERE del_flg = 0");

$sql->execute();

$hospitalList = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($hospitalList);