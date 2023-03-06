<?php

session_start();

include "../Model/dbConnection.php";

if (isset($_POST["email_address"]) && isset($_POST["password"])) {
    $email = $_POST["email_address"];
    $pwd = $_POST["password"];
    $username = $_POST["username"];

    $sql = $pdo->prepare("
    SELECT * FROM tbl_user
    WHERE email_address = :email  
  ");
    $sql->bindValue(":email", $email);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (count($result) == 0) {
        $sql = $pdo->prepare("
    INSERT INTO tbl_user(name,email_address, password , create_date)
    VALUES(:username, :email, :pwd , :create_date)
    ");

        $sql->bindValue(":username", $username);
        $sql->bindValue(":email", $email);
        $sql->bindValue(":pwd", password_hash($pwd, PASSWORD_DEFAULT));
        $sql->bindValue(":create_date", date("Y/m/d"));

        $sql->execute();

        $_SESSION["user_email"] = $email;
        header("Location: ../View/userLogin.php");
    } else {
        echo "error";
    }
}
