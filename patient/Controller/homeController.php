<?php 

include "../Model/dbConnection.php";
$sql = $pdo->prepare("
        SELECT * FROM tbl_healthknowledge LIMIT 0,2
");

$sql->execute();

$articleList = $sql->fetchAll(PDO::FETCH_ASSOC);




?>