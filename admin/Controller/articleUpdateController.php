<?php

include "../Model/dbConnection.php";
include "../Controller/articleEditController.php";
$articleDetail =  $_SESSION["articleDetail"];


if (isset($_POST["updateArticle"])) {
    //get article info
    $title = $_POST["title"];
    $description = $_POST["description"];
    $articleId = $_POST["id"];

    //get image Info
    if ($_FILES["photo"]["name"] == "") {
        // file not exist
        $sql = $pdo->prepare(
            "UPDATE tbl_healthknowledge SET 
            title = :title,
            description = :description,
            updated_date = :updatedDate
            WHERE id = :id
        "
        );
    } else {
        $file = $_FILES['photo']['name'];
        $location = $_FILES['photo']['tmp_name'];
        $extension = pathinfo($file)['extension'];
        // $path = ($articleDetail[0]['id'] + 1) . "." . $extension;


        $sql = $pdo->prepare("SELECT id FROM tbl_healthknowledge ORDER BY id DESC LIMIT 1");
        $sql->execute();
        $articleInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

        if (move_uploaded_file($location, "../View/image/HealthKnowl/" . ($articleId + 1) . "." . $extension)) {
            $sql = $pdo->prepare(
                "UPDATE tbl_healthknowledge SET 
                    title = :title,
                    photo = :photo,
                    description = :description,
                    updated_date    = :updatedDate
                    WHERE id = :id
                "
            );
            $sql->bindValue(":photo", ($articleId + 1) . "." . $extension);
        } else {
            echo 'There was some error moving the file to upload directory.';
        }
    }
    $sql->bindValue(":title", $title);
    $sql->bindValue(":description", $description);
    $sql->bindValue(":id", $articleId);
    $sql->bindValue(":updatedDate", date("Y/m/d"));
    $sql->execute();

    header("Location: ../View/(admin HKNWL)articleList.php");
}
