<?php

include "../Model/dbConnection.php";
$sql = $pdo->prepare("
        SELECT * FROM tbl_privacypolicy
");

$sql->execute();

$policyList = $sql->fetchAll(PDO::FETCH_ASSOC);