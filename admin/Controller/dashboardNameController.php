<?php

session_start();
include "../Model/dbConnection.php";

$email = $_SESSION["admin_email"];
$sql= $pdo->prepare("SELECT * FROM tbl_admin WHERE email_address = :email");
    $sql->bindValue(":email",$email);
    $sql->execute();
    $adminInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    $_SESSION["adminInfo"]=$adminInfo;

?>








