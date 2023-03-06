<?php

session_start();
include "../Model/dbConnection.php";

if(isset($_GET["id"])){
    $policyID = $_GET["id"];

    $sql = $pdo->prepare("SELECT * FROM tbl_privacypolicy WHERE id=:id");
    $sql->bindValue(":id",$policyID);
    $sql->execute();
    $policyInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    $_SESSION["policyInfo"] = $policyInfo;
    header("Location: ../View/adminP&Pedit.php");
}

?>