<?php
include "../Model/dbConnection.php";
session_start();

if(isset($_POST["addDoctoreBtn"])){

    $name = $_POST["name"];
    $name = $_POST["name"];
    $day = $_POST["day"];
    $startTime = $_POST["startTime"];
    $endTime = $_POST["endTime"];
    $expertIn = $_POST["expertIn"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $degree = $_POST["degree"];
    $department = $_POST["department"];

    $file = $_FILES['photo']['name'];
    $location = $_FILES['photo']['tmp_name'];
    $extension = pathinfo($file)['extension'];
    // $path = $file ;

    $email = $_SESSION["hospital_email"];
    $sql= $pdo->prepare("SELECT id FROM tbl_hospital WHERE email_address = :email");
    $sql->bindValue(":email",$email);
    $sql->execute();
    $hospitalInfo = $sql->fetchAll(PDO::FETCH_ASSOC);
    $hospitalID =  $hospitalInfo[0]['id'];


    $sql= $pdo->prepare("SELECT id FROM tbl_doctor ORDER BY id DESC LIMIT 1");
    $sql->execute();
    $doctorInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

   
    if (move_uploaded_file($location, "../View/image/doctor/". ($doctorInfo[0]['id']+1).".".$extension)) {
        $sql = $pdo->prepare("
        INSERT INTO tbl_doctor
        (
        name,
        email_address,
        doctor_photo,
        phone_no,
        address,
        department_id,
        hospital_id,
        dr_degree,
        dr_expert_in,
        duty_day,
        duty_start_time,
        duty_end_time,
        created_date
        )
        VALUES
        (
        :name,
        :email,
        :photo,
        :phone,
        :address,
        :departmentID,
        :hospialID,
        :degree,
        :expertIn,
        :day,
        :start,
        :end,
        :created_date
        )
    ");
    $sql->bindValue(":name", $name);
    $sql->bindValue(":email", $email);
    $sql->bindValue(":photo", ($doctorInfo[0]['id']+1).".".$extension);
    $sql->bindValue(":phone", $phone);
    $sql->bindValue(":address", $address);
    $sql->bindValue(":departmentID", $department);
    $sql->bindValue(":hospialID", $hospitalID);
    $sql->bindValue(":degree", $degree);
    $sql->bindValue(":expertIn", $expertIn);
    $sql->bindValue(":day", $day);
    $sql->bindValue(":start", $startTime);
    $sql->bindValue(":end", $endTime);
    $sql->bindValue(":created_date", date("Y/m/d"));

    $sql->execute();
    header("Location: ../View/hospitalDoctorList.php");

    } 


}
else {
    echo 'Error';
}