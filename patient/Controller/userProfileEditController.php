<?php

session_start();


if (!isset($_SESSION["user_email"])) {
    // go to login
    header("Location:  ../View/userLogin.php");
}else{

    include "../Model/dbConnection.php";

    $email = $_SESSION["user_email"];
    $id = $_SESSION["id"];

    // echo "id is " . $id;

    $sql = $pdo->prepare("
    SELECT * FROM tbl_user 
    WHERE email_address = :email
    ");
    $sql->bindValue(":email", $email);
    $sql->execute();

    $patientInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["patientInfo"] = $patientInfo ;

    header("Location: ../View/accountSetting.php");
}
