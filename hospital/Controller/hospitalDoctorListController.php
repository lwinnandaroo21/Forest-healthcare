<?php

session_start();
$email = $_SESSION["hospital_email"];

$rowLimit = 5;
$page = (isset($_GET["page"])) ?  $_GET["page"] : 1;

$startPage = ($page-1)*$rowLimit;


include "../Model/dbConnection.php";
$sql = $pdo->prepare("SELECT * FROM tbl_hospital WHERE email_address =:email");
        $sql->bindValue(":email",$email);
        $sql->execute();

$hospitalInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
$hospitalId = $hospitalInfo[0]["id"];
$_SESSION["hospitalInfo"]=$hospitalInfo;
$hosId = $_SESSION["hospitalInfo"];

$sql = $pdo->prepare(
        "SELECT doc.*,dep.name AS depname FROM tbl_doctor AS doc
        INNER JOIN tbl_department AS dep        
        ON doc.department_id = dep.id
        INNER JOIN tbl_hospital AS hos
        ON doc.hospital_id = hos.id 
        WHERE doc.hospital_id =:hospitalId   
        AND doc.del_flg = 0 LIMIT $startPage, $rowLimit"
);
$sql->bindValue(":hospitalId",$hospitalId);
$sql->execute();

$doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT COUNT(id) As total FROM tbl_doctor 
        WHERE del_flg = 0 AND hospital_id =:hospitalId ORDER BY created_date
");
// AND hospital_id =:hospitalId
$sql->bindValue(":hospitalId",$hospitalId);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

$totalPages = ceil($totalRecord/$rowLimit); 
// echo "$totalPages";

//tbl_department AS dep == dep ka tbl_department
//tbl_doctor AS doc == doc ka tbl_doctor
//dep.name AS depname == dep table ka name column ko depname lot pay