<?php

include "../Model/dbConnection.php";

session_start();


if (isset($_POST["add"])) {
    $title = $_POST["title"];
    $link = $_POST["videoLink"];


    $sql= $pdo->prepare("
    INSERT INTO tbl_mentalhealth
    (
        mentalhealth_title,
        youtube_link,
        created_date
    )
    VALUES
    (
    :title,
    :link,
    :created_date
    )
    ");
    $sql->bindValue(":title", $title);
    $sql->bindValue(":link", $link);
    $sql->bindValue(":created_date", date("Y/m/d"));
    $sql->execute();

    header("Location: ../View/(admin)MHVideoList.php");
}
