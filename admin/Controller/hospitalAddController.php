<?php
session_start();
include "../Model/dbConnection.php";

if(isset($_POST["hospitalAddBtn"])){
    $name =  $_POST["name"];
    $email =$_POST["emailAddress"];
    $password =$_POST["password"];
    $phone =  $_POST["phoneNumber"];
    $address =  $_POST["address"];
    
    $sql = $pdo->prepare("
        INSERT INTO tbl_hospital
        (
        name,
        email_address,
        password,
        phone_no,
        address,
        created_date
        )
        VALUES
        (
        :name,
        :email,
        :password,
        :phone,
        :address,
        :created_date
        )
    ");

    $sql->bindValue(":name",$name);
    $sql->bindValue(":email",$email);
    $sql->bindValue(":password",password_hash($password,PASSWORD_DEFAULT));
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":address", $address);
    $sql->bindValue(":created_date", date("Y/m/d"));

    $sql->execute();
    $_SESSION["hospital_email"] = $email;
    header("Location: ../View/adminHospitalList.php");

}else{
    echo "Error";
}

?>