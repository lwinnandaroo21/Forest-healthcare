<?php

session_start();

include "../Model/dbConnection.php";

$id= $_SESSION["id"];
$sql = $pdo->prepare("SELECT * FROM tbl_hospital WHERE id = :id");

$sql->bindValue(":id", $id);
$sql->execute();

$hospitalInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["hospitalInfo"] = $hospitalInfo;
echo $id;
print_r($hospitalInfo);

// header("Location: ../View/hospitalProfileEdit.php");

?>