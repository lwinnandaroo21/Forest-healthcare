<?php

include "../Model/dbConnection.php";

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","A". "%");
$sql->execute();
$diseaseInfoA = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","B". "%");
$sql->execute();
$diseaseInfoB = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","C". "%");
$sql->execute();
$diseaseInfoC = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","D". "%");
$sql->execute();
$diseaseInfoD = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","E". "%");
$sql->execute();
$diseaseInfoE = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","F". "%");
$sql->execute();
$diseaseInfoF = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","G". "%");
$sql->execute();
$diseaseInfoG = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","H". "%");
$sql->execute();
$diseaseInfoH = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","I". "%");
$sql->execute();
$diseaseInfoI = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","J". "%");
$sql->execute();
$diseaseInfoJ = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","K". "%");
$sql->execute();
$diseaseInfoK = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","L". "%");
$sql->execute();
$diseaseInfoL = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","M". "%");
$sql->execute();
$diseaseInfoM = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","N". "%");
$sql->execute();
$diseaseInfoN = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","O". "%");
$sql->execute();
$diseaseInfoO = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","P". "%");
$sql->execute();
$diseaseInfoP = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","Q". "%");
$sql->execute();
$diseaseInfoQ = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","R". "%");
$sql->execute();
$diseaseInfoR = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","S". "%");
$sql->execute();
$diseaseInfoS = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","T". "%");
$sql->execute();
$diseaseInfoT = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","U". "%");
$sql->execute();
$diseaseInfoU = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","V". "%");
$sql->execute();
$diseaseInfoV = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","W". "%");
$sql->execute();
$diseaseInfoW = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","X". "%");
$sql->execute();
$diseaseInfoX = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","Y". "%");
$sql->execute();
$diseaseInfoY = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $pdo->prepare("
        SELECT * FROM tbl_conditionservices WHERE disease_title LIKE :title AND del_flg=0
");
$sql->bindValue(":title","Z". "%");
$sql->execute();
$diseaseInfoZ = $sql->fetchAll(PDO::FETCH_ASSOC);
?>