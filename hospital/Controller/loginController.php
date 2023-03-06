<?php

session_start();

include "../Model/dbConnection.php";

if (isset($_POST["hospital_email"]) && isset($_POST["password"])) {
    $email = $_POST["hospital_email"];
    $pwd = $_POST["password"];

    $sql = $pdo->prepare("
    SELECT * FROM tbl_hospital
    WHERE email_address = :email
");

    $sql->bindValue(":email", $email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["hospital_name"] = $result[0]['name'];

    // echo "<pre>";
    // print_r($result);

    if (password_verify($pwd, $result[0]['password'])) {
        $_SESSION["hospital_email"] = $email;
        $_SESSION["id"] = $result[0]['id'];
        header("Location: ../View/hospitalDashboard.php");
    } else {
        header("Location: ../View/hospitalLogin.php");
    }
}
