<?php

session_start();

include "../Model/dbConnection.php";

if(isset($_POST["bookingBtn"])){

    $description = $_POST["description"];
    $doctorID = $_POST["id"];

    $email = $_SESSION["user_email"];
    $sql= $pdo->prepare("SELECT * FROM tbl_user WHERE email_address = :email");
    $sql->bindValue(":email",$email);
    $sql->execute();

    $patientInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
    $patientID =  $patientInfo[0]['id'];

    $sql= $pdo->prepare("SELECT * FROM tbl_doctor WHERE id = :doctorID");
    $sql->bindValue(":doctorID",$doctorID);
    $sql->execute();

    $doctorInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
    
    $hospitalID =  $doctorInfo[0]['hospital_id'];

    $sql = $pdo->prepare(
        "INSERT INTO tbl_appointment 
        (
            doctor_id,
            user_id,
            description,
            hospital_id,
            status,
            created_date
        ) 
        VALUES 
        (
            :doctorID,
            :userID,
            :description,
            :hospitalID,
            :status,
            :createDate
        )"
    );

    $sql->bindValue(":doctorID",$doctorID);
    $sql->bindValue(":userID", $patientID);
    $sql->bindValue(":description", $description);
    $sql->bindValue(":hospitalID", $hospitalID);
    $sql->bindValue(":status", 0);
    $sql->bindValue(":createDate", date("Y/m/d"));

    $sql->execute();

    header("Location: ../View/apptHistory.php");

}else{
    header("Location: ../View/userLogin.php");
}

?>