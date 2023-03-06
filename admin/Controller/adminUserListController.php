<?php

include "../Model/dbConnection.php";

$rowLimit = 5;
$page = (isset($_GET["page"])) ?  $_GET["page"] : 1;

$startPage = ($page-1)*$rowLimit;

$sql = $pdo->prepare("
        SELECT * FROM tbl_user WHERE del_flg = 0 LIMIT $startPage, $rowLimit
");

$sql->execute();

$userList = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($userList);

$sql = $pdo->prepare("
        SELECT COUNT(id) As total FROM tbl_user WHERE del_flg = 0 ORDER BY create_date  
");
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

$totalPages = ceil($totalRecord/$rowLimit); 

