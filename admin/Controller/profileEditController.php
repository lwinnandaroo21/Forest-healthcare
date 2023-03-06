<?php

session_start();

include "../Model/dbConnection.php";

// $id= $_SESSION["id"];
$email = $_SESSION["admin_email"];
$sql = $pdo->prepare("SELECT * FROM tbl_admin WHERE email_address = :email");

$sql->bindValue(":email", $email);
$sql->execute();

$adminInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["adminInfo"] = $adminInfo;
// echo $id;
// print_r($_SESSION["adminInfo"]);

header("Location: ../View/adminProfileUpdate.php");

?>