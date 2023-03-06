<?php
session_start();

include "../Model/dbConnection.php";

if (isset($_GET['doctorID'])) {
    $doctorID = $_GET['doctorID'];

    // $sql = $pdo->prepare("SELECT * FROM tbl_doctor WHERE id = :doctorID");
    $sql = $pdo->prepare("
        SELECT doc.*,dep.name As depname,hos.name As hosname FROM tbl_doctor As doc 
        INNER JOIN tbl_department As dep
        ON doc.department_id = dep.id
        INNER JOIN tbl_hospital As hos
        ON doc.hospital_id = hos.id
        WHERE doc.id = :doctorID 
");
    $sql->bindValue(":doctorID", $doctorID);
    $sql->execute();
    $doctorInfos = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["doctorInfos"] = $doctorInfos;

    $email = $_SESSION["user_email"];
    $sql = $pdo->prepare("SELECT * FROM tbl_user WHERE email_address = :email");
    $sql->bindValue(":email", $email);
    $sql->execute();

    $patientInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["patientInfo"] = $patientInfo;
    header("Location: ../View/bookingForm.php");
}
