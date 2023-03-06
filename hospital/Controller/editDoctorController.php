<?php
    session_start();

    include "../Model/dbConnection.php";

    if(isset($_GET["id"])){
        $doctorId = $_GET["id"];

        $sql = $pdo->prepare(("SELECT * FROM tbl_doctor WHERE id =:id"));
        $sql->bindValue(":id",$doctorId);
        $sql->execute();

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // print_r($result);

        //save the result to session
        $_SESSION["doctorInfo"] = $result;

        header("Location: ../View/editDoctor.php");
    }

?>
