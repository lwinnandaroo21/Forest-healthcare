<?php

include "../Model/dbConnection.php";

$sql = $pdo->prepare("SELECT visitors FROM tbl_visitor WHERE id = 1");
$sql->execute();

$visitorCount = $sql->fetchAll(PDO::FETCH_ASSOC);
$visitorIncrease =$visitorCount[0]["visitors"]+1;

$sql = $pdo->prepare("UPDATE tbl_visitor SET visitors=:visitors WHERE id=1");
$sql->bindValue(":visitors",$visitorIncrease);
$sql->execute();

?>