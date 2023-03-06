<?php

include "../Model/dbConnection.php";


$sql = $pdo->prepare("SELECT * FROM tbl_contactus");
$sql->execute();
$contactUs = $sql->fetchAll(PDO::FETCH_ASSOC);