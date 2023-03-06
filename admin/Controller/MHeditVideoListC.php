
<?php

include "../Model/dbConnection.php";

$rowLimit = 5;
$page = (isset($_GET["page"])) ?  $_GET["page"] : 1;

$startPage = ($page-1)*$rowLimit;

$sql = $pdo->prepare("
        SELECT * FROM tbl_mentalhealth WHERE del_flg = 0 LIMIT $startPage, $rowLimit
");
$sql->execute();

$videoList = $sql->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["videoList"] = $videoList;

$sql = $pdo->prepare("
        SELECT COUNT(mentalhealth_id) As total FROM tbl_mentalhealth WHERE del_flg = 0 ORDER BY created_date  
");
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

$totalPages = ceil($totalRecord/$rowLimit); 
