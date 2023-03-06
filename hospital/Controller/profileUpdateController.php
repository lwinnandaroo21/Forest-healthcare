<?php

include "../Model/dbConnection.php";

if (isset($_POST["updateProfile"])) {
    // get hospital Info
    $name = $_POST["name"];
    $pwd = $_POST["password"];
    $email = $_POST["hospital_email"];
    $phone = $_POST["phone_no"];
    $address = $_POST["address"];
    $photo = $_POST["photo"];
    $id = $_POST["id"];


    //get image Info
    if ($_FILES["uploadFile"]["name"] == "") {
        // file not exist
        $sql = $pdo->prepare(
            "UPDATE tbl_hospital SET 
            name = :name,
            email_address = :email,
            password = :pwd,
            phone_no = :phone,
            address = :address
            WHERE id = :id
       ");
    }
    else {
        $file = $_FILES['uploadFile']['name'];
        $location = $_FILES['uploadFile']['tmp_name'];
        $extension = pathinfo($file)['extension'];
        $path = $id.".".$extension;

        if (move_uploaded_file($location, "../View/image/".$id."." . $extension)) {
            $sql = $pdo->prepare(
                "UPDATE tbl_hospital SET 
                name = :name,
                email_address = :email,
                password = :pwd,
                phone_no = :phone,
                address = :address,
                photo = :photo
                WHERE id = :id
                "
            );
            $sql->bindValue(":photo", $path);
        }
        else {
            echo 'There was some error moving the file to upload directory.';
        }
    }
    $sql->bindValue(":name", $name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":pwd", $pwd);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":address", $address);
    $sql->bindValue(":id", $id);

    $sql->execute();
    echo "<script>alert('Update Successful')</script>";
    echo "<script>window.location='../View/hospitalAppointmentList.php'</script>";
    // header("Location: ../View/hospitalProfileEdit.php");
}