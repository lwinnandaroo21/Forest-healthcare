<?php
session_start();
include "../Model/dbConnection.php";

if(isset($_POST["departmentBtn"])){
    $name =  $_POST["name"];

    $email = $_SESSION["hospital_email"];
    $sql= $pdo->prepare("SELECT id FROM tbl_hospital WHERE email_address = :email");
    $sql->bindValue(":email",$email);
    $sql->execute();

    $hospitalInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
    $hospitalID =  $hospitalInfo[0]['id'];

    $sql = $pdo->prepare("
        INSERT INTO tbl_department
        (
        name,
        hospital_id,
        created_date
        )
        VALUES
        (
        :name,
        :hospitalID,
        :created_date
        )
    ");

    $sql->bindValue(":name",$name);
    $sql->bindValue(":hospitalID", $hospitalID);
    $sql->bindValue(":created_date", date("Y/m/d"));

    $sql->execute();
    header("Location: ../View/hospitalDoctorList.php");

}else{
    echo "Error";
}




 

?>