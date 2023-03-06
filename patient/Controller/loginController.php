<?php

session_start();

include "../Model/dbConnection.php";

if (isset($_POST["user_email"]) && isset($_POST["password"])) {
    $email = $_POST["user_email"];
    $pwd = $_POST["password"];

    $sql = $pdo->prepare("
    SELECT * FROM tbl_user
    WHERE email_address = :email 
");

    $sql->bindValue(":email", $email);
    $sql->execute();
    $patientInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($patientInfo);

    if (password_verify($pwd, $patientInfo[0]['password'])) {
        $_SESSION["user_email"] = $email;
        $_SESSION["id"] = $patientInfo[0]['id'];
        header("Location: ../View/userHomePage.php");
    } else {
        header("Location: ../View/userLogin.php");
    }
}
