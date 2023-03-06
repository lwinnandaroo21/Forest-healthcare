<?php
session_start();

include "../Model/dbConnection.php";

if (isset($_GET["id"])) {
    $appointmentID = $_GET["id"];

    $sql = $pdo->prepare("
    SELECT user.name AS userna,user.age AS userage,user.gender AS usergen,user.address AS useradd,user.phone_no AS userph,appointment.description As des FROM tbl_appointment  AS appointment
    INNER JOIN tbl_user AS user
    ON appointment.user_id  = user.id
    WHERE appointment.id = :id
");
    $sql->bindValue(":id", $appointmentID);
    $sql->execute();

    $result = $sql->fetchAll(PDO::FETCH_ASSOC);


    //save the result to session
    $_SESSION["userInfo"] = $result;

    header("Location: ../View/hospitalpatientDetail.php");
}