<?php

include "../Model/dbConnection.php";

if(isset($_POST["PrivacyBtn"])){
    $title = $_POST["title"];
    $detail = $_POST["detail"];

    $sql = $pdo->prepare("
        INSERT INTO tbl_privacypolicy
        (
            title,
            description,
            created_date
        )
        VALUES
        (
            :title,
            :description,
            :createdDate
        )
    ");

    $sql->bindValue(":title",$title);
    $sql->bindValue(":description",$detail);
    $sql->bindValue(":createdDate",date("Y/m/d"));

    $sql->execute();
    header("Location: ../View/adminP&Plist.php");
}
else{
    echo "Error";
}

?>