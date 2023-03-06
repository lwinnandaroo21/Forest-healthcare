<?php

include "../Model/dbConnection.php";

$rowLimit = 5;
$page = (isset($_GET["page"])) ?  $_GET["page"] : 1;

$startPage = ($page-1)*$rowLimit;

$sql = $pdo->prepare("
        SELECT doc.*,dep.name AS depname FROM tbl_doctor AS doc
        INNER JOIN tbl_department AS dep
        ON doc.department_id = dep.id
        WHERE doc.del_flg = 0 LIMIT $startPage, $rowLimit
");

$sql->execute();

$doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT COUNT(id) As total FROM tbl_doctor WHERE del_flg = 0 
");
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

$totalPages = ceil($totalRecord/$rowLimit); 