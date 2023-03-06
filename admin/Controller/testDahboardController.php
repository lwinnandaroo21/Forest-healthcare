<?php
// session_start();
include "../Model/dbConnection.php";

// age pie
$sql = $pdo->prepare("SELECT * FROM tbl_user");
$sql->execute();
$pieChart = $sql->fetchAll(PDO::FETCH_ASSOC);

$ages = [];

foreach($pieChart as $key => $value){
    array_push($ages,$value["age"]);
}
// echo "<pre>";
// print_r($ages);


//gender pie
// $sql = $pdo->prepare("SELECT * FROM tbl_user");
// $sql->execute();
// $pieChart = $sql->fetchAll(PDO::FETCH_ASSOC);

$gender = [];

foreach($pieChart as $key => $value){
    array_push($gender,$value["gender"]);
}

//get total users
$sql = $pdo->prepare("SELECT COUNT(id) AS totalUser, create_date FROM tbl_user GROUP BY YEAR(create_date), MONTH(create_date)");
$sql->execute();
$totalUser= $sql->fetchAll(PDO::FETCH_ASSOC);




// $_SESSION["totalUser"] = $totalUser;

//get total visitors
$sql = $pdo->prepare("SELECT COUNT(id) AS totalVisitor FROM tbl_visitor");
$sql->execute();
$totalVisitor= $sql->fetchAll(PDO::FETCH_ASSOC);

//get total appt
$sql = $pdo->prepare("SELECT COUNT(id) AS totalAppt FROM tbl_appointment WHERE del_flg=0");
$sql->execute();
$totalAppt= $sql->fetchAll(PDO::FETCH_ASSOC);

//get total hospitals
$sql = $pdo->prepare("SELECT COUNT(id) AS totalHospital FROM tbl_hospital WHERE del_flg=0");
$sql->execute();
$totalHospital= $sql->fetchAll(PDO::FETCH_ASSOC);

//get total doctors
$sql = $pdo->prepare("SELECT COUNT(id) AS totalDoctor FROM tbl_doctor WHERE del_flg=0");
$sql->execute();
$totalDoctor= $sql->fetchAll(PDO::FETCH_ASSOC);




