<?php

session_start();
include "../Model/dbConnection.php";

if(isset($_GET["id"])){
    $diseaseID = $_GET["id"];

    $sql = $pdo->prepare("SELECT * FROM tbl_conditionservices WHERE id=:id");
    $sql->bindValue(":id",$diseaseID);
    $sql->execute();
    $diseaseInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    $_SESSION["diseaseInfo"] = $diseaseInfo;
    header("Location: ../View/C&SEdit.php");
}

?>