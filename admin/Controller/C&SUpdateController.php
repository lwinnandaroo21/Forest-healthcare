<?php

include "../Model/dbConnection.php";

if (isset($_POST["diseaseUpdateBtn"])) {
    $topic = $_POST["topic"];
    $detail = $_POST["detail"];
    $id = $_POST["id"];

    //get image Info
    if ($_FILES["photo"]["name"] == "") {
        // file not exist
        $sql = $pdo->prepare(
            "UPDATE tbl_conditionservices SET 
        disease_title   = :title,
        disease_detail  = :detail,
        updated_date    = :updatedDate
    WHERE id = :id
    "
        );
    } else {
        $file = $_FILES['photo']['name'];
        $location = $_FILES['photo']['tmp_name'];
        $extension = pathinfo($file)['extension'];
        // $path = $id . "." . $extension;
        $sql = $pdo->prepare("SELECT id FROM tbl_conditionservices ORDER BY id DESC LIMIT 1");
        $sql->execute();
        $diseaseInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

        if (move_uploaded_file($location, "../View/image/C&S/" . ($diseaseInfo[0]['id'] + 1) . "." . $extension)) {
            $sql = $pdo->prepare(
                "UPDATE tbl_conditionservices SET 
            disease_title   = :title,
            disease_detail  = :detail,
            cs_photo        = :photo,
            updated_date    = :updatedDate
            WHERE id = :id
            "
            );
            $sql->bindValue(":photo", ($diseaseInfo[0]['id'] + 1) . "." . $extension);
        } else {
            echo 'There was some error moving the file to upload directory.';
        }
    }
    $sql->bindValue(":title", $topic);
    $sql->bindValue(":detail", $detail);
    $sql->bindValue(":updatedDate", date("Y/m/d"));
    $sql->bindValue(":id", $id);
    $sql->execute();
    header("Location: ../View/(admin C&S)diseaseList.php");
}
