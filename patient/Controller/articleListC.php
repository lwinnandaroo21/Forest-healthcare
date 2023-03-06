<?php 

include "../Model/dbConnection.php";
$sql = $pdo->prepare("
        SELECT * FROM tbl_healthknowledge WHERE del_flg = 0
");

$sql->execute();

$articleList = $sql->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($articleList);


?>