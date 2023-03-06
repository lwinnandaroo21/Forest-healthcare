<?php

include "../Model/dbConnection.php";

if(isset($_POST["updateProfile"])){
    //get patient info
    $name = $_POST["name"];
    $pwd = $_POST["password"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $phone = $_POST["phone_no"];
    $address = $_POST["address"];
    $id = $_POST["id"];
    
    //get image info
    if($_FILES["uploadFile"]["name"] == ""){
        $sql = $pdo->prepare(
            "UPDATE tbl_user SET
                name = :name,
                password = :pwd,
                age = :age,
                gender = :gender,
                address = :address,
                phone_no = :phone
                WHERE id = :id
    ");

    }else{
        $file = $_FILES['uploadFile']['name'];
        $location = $_FILES['uploadFile']['tmp_name'];
        $extension = pathinfo($file)['extension'];
        $path = $id.".".$extension;

        if (move_uploaded_file($location, "../View/storages/userProfile/".$id.".".$extension)) {
            $sql = $pdo->prepare(
            "UPDATE tbl_user SET 
            name = :name,
            photo = :photo,
            password = :pwd,
            gender = :gender,
            age = :age,
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
    $sql->bindValue(":gender",$gender);
    $sql->bindValue(":age",$age);
    $sql->bindValue(":phone",$phone);
    $sql->bindValue(":address",$address);
    $sql->bindValue(":id",$id);

    $sql->execute();

    header("Location: ../View/userProfile.php");
}
