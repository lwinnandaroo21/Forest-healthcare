<?php
include "../Model/dbConnection.php";
session_start();

if (isset($_POST["updateDoctor"])) {

    $day = $_POST["day"];
    $startTime = $_POST["startTime"];
    $endTime = $_POST["endTime"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $department = $_POST["department"];
    $id = $_POST["id"];


    $sql = $pdo->prepare(
        "UPDATE tbl_doctor SET
            duty_day=:day,
            duty_start_time=:startTime,
            duty_end_time=:endTime,
            email_address=:email,       
            phone_no=:phone,
            address=:addr,
            department_id=:departmentId,                
            updated_date=:updateDate
        WHERE   id =:id "
);
        

    $sql->bindValue(":day", $day);       
    $sql->bindValue(":startTime", $startTime);
    $sql->bindValue(":endTime", $endTime);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":addr", $address);
    $sql->bindValue(":departmentId", $department);  

    $sql->bindValue(":updateDate", date("Y/m/d"));
    $sql->bindValue(":id", $id);  

    $sql->execute();

    header("Location: ../View/hospitalDoctorList.php");
}else{
    header("Location: ../View/hospitalDoctorList.php");
}
