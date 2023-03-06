<?php


session_start();

include "../Model/dbConnection.php";

if (isset($_POST["admin_email"]) && isset($_POST["password"])) {
    $email = $_POST["admin_email"];
    $pwd = $_POST["password"];

    $sql = $pdo->prepare("
    SELECT * FROM tbl_admin
    WHERE email_address = :email 
");

    $sql->bindValue(":email", $email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($result);

    if ($pwd == $result[0]['password']) {
        $_SESSION["admin_email"] = $email;
        $_SESSION["id"] = $result[0]['id'];
        header("Location: ../View/testDahboard.php");
    } else {
        header("Location: ../View/adminLogin.php");
    };
}