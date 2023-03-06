<?php

include "../Model/dbConnection.php";
include "./common/qrcodeFunction.php";

if (isset($_POST["status"])) {
        $status =  $_POST["status"];
        $bookingID = $_POST["bookingID"];

        //check qrcode or not
        if ($status == 1) {
                $qrcode = getQrcode();
        } else {
                $qrcode = null;
        }
        // echo $qrcode;

        $sql = $pdo->prepare("
                Update tbl_appointment  SET
                status = :status,
                qrcode = :qrcode
                WHERE id = :id
        ");
        $sql->bindValue(":status", $status);
        $sql->bindValue(":qrcode", $qrcode);
        $sql->bindValue(":id", $bookingID);
        $sql->execute();

        echo 1;
} else {
        echo 0;
}
