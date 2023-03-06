<?php

include "../Model/dbConnection.php";

$sql = $pdo->prepare("SELECT * FROM tbl_contactusmail");
$sql->execute();
$mailList = $sql->fetchAll(PDO::FETCH_ASSOC);