<?php

include "../Model/dbConnection.php";

if (isset($_POST["changeBtn"])){
    $title = $_POST["title"];
    $description = $_POST["description"];

    // echo $title;
    // echo $text;

    $sql = $pdo->prepare("UPDATE tbl_aboutus SET title=:title,
                                description=:description,
                                created_date=:createdDate");

    $sql->bindValue(":title",$title);
    $sql->bindValue(":description",$description);
    $sql->bindValue(":createdDate",date("Y/m/d"));

    $sql->execute();

    echo "<script>alert('Update Successful')</script>";
    echo "<script>window.location='../View/adminAboutUs.php'</script>";
    // header("Location: ../View/adminAboutUs.php");
}

