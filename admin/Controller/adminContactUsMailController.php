<?php

include "../Model/dbConnection.php";
include "../Controller/common/mailSender.php";


// $sql = $pdo->prepare("SELECT id FROM tbl_contactusmail ");
// $sql->execute();
// $contactUsMailIdInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
// $contactUsMailId = $contactUsMailIdInfo[0]["id"];

// $sql = $pdo->prepare("SELECT email_address FROM tbl_contactusmail WHERE id=:contactUsMailId ");
// $sql->bindValue(":contactUsMailId",$contactUsMailId);
// $sql->execute();
// $userEmailInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
// $userEmail = $userEmailInfo[0]["email_address"];

// print_r($userEmail);



//     if(isset($_POST["replyBtn"])){
//     // $userEmail = $_POST["userEmail"];
//     $subject = $_POST["subject"];
//     $replyMeaasge = $_POST["replyMeaasge"];
//     $subject = $_POST["subject"];

//     if (isset($_GET["id"])) {

//         $mailID = $_GET["id"];

//         $sql = $pdo->prepare("SELECT email_address FROM tbl_contactusmail WHERE id=:id ");
//         $sql->bindValue(":id", $mailID);
//         $sql->execute();
//         $result = $sql->fetchAll(PDO::FETCH_ASSOC);


//         echo "<pre>";
//         print_r($result);
// }
// }

if (isset($_POST["replyBtn"])) {
    $userEmail = $_POST["userEmail"];
    $subject = $_POST["subject"];
    $replyMeaasge = $_POST["replyMeaasge"];
    $subject = $_POST["subject"];
    // echo "<pre>";
    // print_r($userEmail);
    
    $mail = new SendMail();
    $mail->sendMail($userEmail, $subject, $replyMeaasge);

    echo "<script>alert('Email sent Successfully')</script>";
    echo "<script>window.location='../View/adminContactList.php'</script>";

    // header("Location: ../View/adminContactList.php");
}
