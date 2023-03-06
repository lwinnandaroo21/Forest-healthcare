<?php

include "../Model/dbConnection.php";

if(isset($_POST["searchText"])){
    $search = $_POST["searchText"];

        $sql = $pdo->prepare("SELECT * FROM tbl_healthknowledge 
        WHERE title LIKE :name
        OR description LIKE :description
        
        ");
        $sql->bindValue(":name", "%".$search."%");
        $sql->bindValue(":description" ,"%".$search."%");
    // }

    $sql->execute();

    $articleList = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($articleList);

  
}
