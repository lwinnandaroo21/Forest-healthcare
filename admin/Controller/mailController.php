<?php

session_start();

include "../Model/dbConnection.php";
include "./common/mailSender.php";

if(isset($_POST["replyBtn"]) ){

    $sql = $pdo->prepare("SELECT email_address FROM tbl_contactusmail");

    $sql->execute();
    $contactEmail = $sql->fetchAll(PDO::FETCH_ASSOC);

    print_r($contactEmail);
}
// if (
//     isset($_POST["username"]) && isset($_POST["email"]) &&
//     isset($_POST["phNo"]) && isset($_POST["message"])
// ) {
//     $username = $_POST["username"];
//     $email = $_POST["email"];
//     $phNO = $_POST["phNo"];
//     $message = $_POST["message"];


//     //get patient id

//     $sql = $pdo->prepare("SELECT * FROM tbl_contactusmail ");

//     $sql->execute();

//     $result = $sql->fetchAll(PDO::FETCH_ASSOC);

//     if (count($result) == 0) {
//         $sql = $pdo->prepare(
//             "INSERT INTO tbl_contactusmail
//             (
//                 name,
//                 email_address,
//                 password,
//                 create_date
//             )
//             VALUES
//             (
//                 :username,
//                 :email,
//                 :pwd ,
//                 :create_date)"
//             );

//         $sql->bindValue(":username", $username);
//         $sql->bindValue(":email", $email);
//         $sql->bindValue(":pwd", password_hash($pwd, PASSWORD_DEFAULT));
//         $sql->bindValue(":create_date", date("Y/m/d"));

//         $sql->execute();

//         $_SESSION["user_email"] = $email;
//         header("Location: ../View/userHomePage.php");
//     }
// }
