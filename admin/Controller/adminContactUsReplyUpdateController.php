<?php
session_start();

include "../Model/dbConnection.php";

if (isset($_GET["id"])) {

    $mailID = $_GET["id"];

    $sql = $pdo->prepare("SELECT email_address FROM tbl_contactusmail WHERE id=:id ");
    $sql->bindValue(":id", $mailID);
    $sql->execute();
    $result = $sql->fetchAll(PDO::FETCH_ASSOC);

    // echo "<pre>";
    // print_r($result);

//save session email $result
    $_SESSION["replyMail"] = $result;

    header("Location: ../View/adminContactUsReply.php");
}
