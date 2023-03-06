<?php
session_start();

include "../Model/dbConnection.php";

if (isset($_GET['articleId'])) {
    $articleId = $_GET['articleId'];

    $sql = $pdo->prepare("SELECT * FROM tbl_healthknowledge WHERE id = :articleId");

    $sql->bindValue(":articleId", $articleId);
    $sql->execute();
    $articleInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
    $_SESSION["articleInfo"] = $articleInfo;

    // print_r($articleInfo);
    header("Location: ../View/healthKnowledgeDetail.php");
}
