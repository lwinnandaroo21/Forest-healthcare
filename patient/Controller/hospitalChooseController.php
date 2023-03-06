<?php

include "../Model/dbConnection.php";


if(isset($_POST["hospital"])){
    $choose = $_POST["hospital"];
    $sql = $pdo->prepare("
    SELECT doc.*,dep.name As depname FROM tbl_doctor As doc 
    INNER JOIN tbl_department As dep
    ON doc.department_id = dep.id
    WHERE doc.hospital_id = :id AND doc.del_flg=0
");
    // $sql = $pdo->prepare("SELECT * FROM tbl_doctor WHERE hospital_id = :id");
    $sql->bindValue(":id",$choose);
    $sql->execute();
    $doctorList = $sql->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($doctorList);

    
}
?>
