<?php

include "../Model/dbConnection.php";

if(isset($_POST["status"])){
        $status =  $_POST["status"];
        $bookingID = $_POST["bookingID"];
        $sql = $pdo->prepare("
                Update tbl_appointment  SET
                status = :status
                WHERE id = :id
        ");
        $sql->bindValue(":status", $status);
        $sql->bindValue(":id", $bookingID);
        $sql->execute();

        echo 1;
}else{
        echo 0;
}
