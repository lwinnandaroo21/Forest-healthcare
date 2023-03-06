<?php

session_start();
$email = $_SESSION["user_email"];

$rowLimit = 5;
$page = (isset($_GET["page"])) ?  $_GET["page"] : 1;

$startPage = ($page-1)*$rowLimit;

include "../Model/dbConnection.php";
$sql = $pdo->prepare("
        SELECT * FROM tbl_user WHERE email_address =:email       
        ");
        $sql->bindValue(":email",$email);
        $sql->execute();

$userInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
$userId = $userInfo[0]["id"];

$sql = $pdo->prepare("
        SELECT appointment.*,user.name AS username,user.id AS userid,
        doc.name AS docname, doc.duty_day AS docday,doc.duty_start_time AS docstarttime,doc.duty_end_time AS docendtime
        , hos.name AS hosname
        FROM tbl_appointment AS appointment
        INNER JOIN tbl_user AS user
        ON appointment.user_id = user.id 
        INNER JOIN tbl_doctor AS doc
        ON  appointment.doctor_id =doc.id 
        INNER JOIN tbl_hospital AS hos
        ON appointment.hospital_id = hos.id 
        WHERE appointment.user_id =:userId  
        AND appointment.del_flg = 0 LIMIT $startPage, $rowLimit   
");
$sql->bindValue(":userId",$userId);
$sql->execute();

$appointmentList = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($appointmentList);
$sql = $pdo->prepare("
        SELECT COUNT(id) As total FROM tbl_appointment 
        WHERE del_flg = 0 
        AND user_id = :userid ORDER BY created_date  
");
$sql->bindValue(":userid",$userId);
$sql->execute();
$totalRecord = $sql->fetchAll(PDO::FETCH_ASSOC)[0]['total'];

$totalPages = ceil($totalRecord/$rowLimit); 
?>