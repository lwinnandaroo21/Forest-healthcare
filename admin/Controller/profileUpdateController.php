<?php

include "../Model/dbConnection.php";

if(isset($_POST["updateProfile"])){
    //get admin info
    $name = $_POST["name"];
    $pwd = $_POST["password"];
    $phone = $_POST["phone_no"];
    $address = $_POST["address"];
    // $photo = $_POST["photo"];
    $id = $_POST["id"];

    //get image info
    if($_FILES["uploadFile"]["name"] == ""){
        $sql = $pdo->prepare(
            "UPDATE tbl_admin SET
                name = :name,
                password = :pwd,
                address = :address,
                phone_no = :phone
                WHERE id = :id
        ");

    }else{
        $file = $_FILES['uploadFile']['name'];
        $location = $_FILES['uploadFile']['tmp_name'];
        $extension = pathinfo($file)['extension'];
        $path = $id.".".$extension;

        if (move_uploaded_file($location, "../View/image/".$id.".".$extension)) {
            $sql = $pdo->prepare(
            "UPDATE tbl_admin SET 
            name = :name,
            photo = :photo,
            password = :pwd,
            phone_no = :phone,
            address = :address
            WHERE id = :id
            "
            );
            $sql->bindValue(":photo", $path);
        } else {
            echo 'There was some error moving the file to upload directory.';
        }
    };
    $sql->bindValue(":name",$name);
    $sql->bindValue(":pwd",$pwd);
    $sql->bindValue(":phone",$phone);
    $sql->bindValue(":address",$address);
    $sql->bindValue(":id",$id);

    $sql->execute();

    header("Location: ../View/testDahboard.php");
}
