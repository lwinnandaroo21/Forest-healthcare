<?php

include "../Model/dbConnection.php";

if(isset($_POST["submitBtn"])){
    $title = $_POST["title"];
    $phNo = $_POST["phNo"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $description = $_POST["description"];

    $sql = $pdo->prepare("UPDATE tbl_contactus SET phone_no=:phNo,
                                email_address=:email,
                                address=:address,
                                title=:title,
                                welcome_text=:description,
                                created_date=:createdDate");

    $sql->bindValue(":phNo",$phNo);
    $sql->bindValue(":email",$email);
    $sql->bindValue(":address",$address);
    $sql->bindValue(":title",$title);
    $sql->bindValue(":description",$description);
    $sql->bindValue(":createdDate", date("Y/m/d"));

    $sql->execute();
    
    echo "<script>alert('Update Successful')</script>";
    echo "<script>window.location='../View/adminContact.php'</script>";
    // header("Location: ../View/adminContact.php");
};

?>