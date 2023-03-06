<?php

include "../Model/dbConnection.php";

$sql = $pdo->prepare("SELECT * FROM tbl_user");
$sql->execute();
$pieChart = $sql->fetchAll(PDO::FETCH_ASSOC);

$ages = [];

foreach($pieChart as $key => $value){
    array_push($ages,$value["date_of_birth"]);
}
echo "<pre>";
print_r($ages);

?>