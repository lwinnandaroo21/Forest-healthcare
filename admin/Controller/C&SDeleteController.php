<?php

include "../Model/dbConnection.php";


if(isset($_GET["id"])){
    $id =  $_GET["id"];

        $sql = $pdo->prepare(
            "UPDATE tbl_conditionservices SET
            del_flg = 1
            WHERE id = :id
        ");
        $sql->bindValue(":id",$id);
        $sql->execute();


    header("Location: ../View/(admin C&S)diseaseList.php");

}
