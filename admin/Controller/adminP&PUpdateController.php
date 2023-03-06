<?php

include "../Model/dbConnection.php";

if(isset($_POST["PrivacyBtn"])){
    $title = $_POST["title"];
    $detail = $_POST["detail"];
    $id = $_POST["id"];

    $sql = $pdo->prepare("
        UPDATE tbl_privacypolicy SET
        title = :title,
        description = :description,
        updated_date = :updatedDate
        WHERE id = :id
    ");

    $sql->bindValue(":title",$title);
    $sql->bindValue(":description",$detail);
    $sql->bindValue(":updatedDate",date("Y/m/d"));
    $sql->bindValue(":id",$id);

    $sql->execute();
    header("Location: ../View/adminP&Plist.php");
}
else{
    echo "Error";
}

?>