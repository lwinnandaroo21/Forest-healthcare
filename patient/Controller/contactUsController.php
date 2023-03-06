<?php


include "../Model/dbConnection.php";

if (isset($_POST["sendMail"])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phNo = $_POST["phNo"];
    $textMessage = $_POST["textMessage"];

    echo $username;
    echo $email;
    echo $phNo;
    echo $textMessage;
    $sql = $pdo->prepare(
        "INSERT INTO tbl_contactusmail 
        (
            username,
            email_address,
            phone_no,
            text_message,
            created_date
        ) 
        VALUES 
        (
            :username,
            :email,
            :phNo,
            :textMessage,
            :createdDate
        )"
    );
    $sql->bindValue(":username", $username);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":phNo", $phNo);
    $sql->bindValue(":textMessage", $textMessage);
    $sql->bindValue(":createdDate", date("Y/m/d"));

    $sql->execute();
    header("Location: ../View/contactUs.php");
}

// $sql = $pdo->prepare("SELECT * FROM tbl_contactusmail ");
// $sql->execute();
// echo $username;
// echo $email;
// echo $phNO;
// echo $message;