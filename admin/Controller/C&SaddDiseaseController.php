<?php

include "../Model/dbConnection.php";
session_start();

if(isset($_POST["diseaseBtn"])){
    $topic = $_POST["topic"];
    $detail = $_POST["detail"];

    $file = $_FILES['photo']['name'];
    $location = $_FILES['photo']['tmp_name'];
    $extension = pathinfo($file)['extension'];

    $sql = $pdo->prepare("SELECT id FROM tbl_conditionservices ORDER BY id DESC LIMIT 1");
    $sql->execute();
    $diseaseInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

    if (move_uploaded_file($location, "../View/image/C&S/". ($diseaseInfo[0]['id']+1).".".$extension)) {
        $sql = $pdo->prepare("
        INSERT INTO tbl_conditionservices
        (
            disease_title,
            disease_detail,
            cs_photo,
            created_date
        )
        VALUES
        (
            :title,
            :detail,
            :photo,
            :createdDate
        )
    ");
    $sql->bindValue(":title", $topic);
    $sql->bindValue(":detail", $detail);
    $sql->bindValue(":photo", ($diseaseInfo[0]['id']+1).".".$extension);
    $sql->bindValue(":createdDate", date("Y/m/d"));

    $sql->execute();
    header("Location: ../View/(admin C&S)diseaseList.php");
    } 

}
else {
    echo 'Error';
}


?>