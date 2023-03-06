<?php
session_start();
include "../Model/dbConnection.php";
$email = $_SESSION["hospital_email"];
// print_r($email);



$sql = $pdo->prepare("SELECT * FROM tbl_hospital WHERE email_address =:email");
$sql->bindValue(":email", $email);
$sql->execute();
$hospitalInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
$hospitalId = $hospitalInfo[0]["id"];


//get total doctors
$sql = $pdo->prepare("SELECT COUNT(id) AS totalDoctor FROM tbl_doctor WHERE del_flg=0 AND hospital_id =:hospitalId");
$sql->bindValue(":hospitalId",$hospitalId);
$sql->execute();
$totalDoctor = $sql->fetchAll(PDO::FETCH_ASSOC);

//get total appt
$sql = $pdo->prepare("SELECT COUNT(id) AS totalApptGraph, created_date FROM tbl_appointment WHERE del_flg=0 GROUP BY YEAR(created_date), MONTH(created_date) ");
$sql->execute();
$totalApptGraph = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("SELECT COUNT(id) AS totalAppt FROM tbl_appointment WHERE  hospital_id =:hospitalId");
$sql->bindValue(":hospitalId",$hospitalId);
$sql->execute();
$totalAppt = $sql->fetchAll(PDO::FETCH_ASSOC);



