<?php

include "../Model/dbConnection.php";


$sql = $pdo->prepare("
        SELECT * FROM tbl_department
");

$sql->execute();

$departmentList = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($departmentList);
