<?php
session_start();
include "../Model/dbConnection.php";

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE id=:id
    ");

    $sql->bindValue(":id",$id);
    $sql->execute();
    $diseaseDetailInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["diseaseDetail"] = $diseaseDetailInfo;
    header("Location: ../View/C&Sdetail.php");
}

?>