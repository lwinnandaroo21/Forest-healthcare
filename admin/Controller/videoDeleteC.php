<?php

include "../Model/dbConnection.php";

if(isset($_GET["id"])){
    $id =  $_GET["id"];

        $sql = $pdo->prepare(
            "UPDATE tbl_mentalhealth SET
            del_flg = 1
            WHERE mentalhealth_id = :id
        ");
        $sql->bindValue(":id",$id);
        $sql->execute();

    header("Location: ../View/(admin)MHVideoList.php");

}

?>