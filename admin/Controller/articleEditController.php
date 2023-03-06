<?php

session_start();

include "../Model/dbConnection.php";

if(isset($_GET["ID"])){
    $articleId = $_GET["ID"];

    $sql = $pdo->prepare(("SELECT * FROM tbl_healthknowledge WHERE id =:id"));
    $sql->bindValue(":id",$articleId);
    $sql->execute();

    $articleDetail = $sql->fetchAll(PDO::FETCH_ASSOC);
    // echo "<pre>";
    // print_r($articleDetail);

    $_SESSION["articleDetail"] = $articleDetail;
    $_SESSION["articleId"] = $articleId;
    
    header("Location: ../View/(admin HKNWL)editArticle.php");
}

?>