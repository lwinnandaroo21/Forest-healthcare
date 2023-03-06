<?php

include "../Model/dbConnection.php";

$sql = $pdo->prepare("
        SELECT * FROM tbl_mentalhealth WHERE del_flg = 0 
");
$sql->execute();

$videoList = $sql->fetchAll(PDO::FETCH_ASSOC);
// print_r($videoList);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mental Health List</title>
    <!-- css -->
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/mentalHealthList.css?v=<?= time() ?>">
    <link rel="stylesheet" href="./resources/css/all.css" />
    <link rel="stylesheet" href="./resources/css/mental.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- for icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>
    <div>
        <img src="./storages/mentalHealthPhoto.png" alt="mental health phpto" class="mhdiv" srcset="">
    </div>
    <div class="container-fluid ">
        <div class="d-flex justify-content-center text-center">
                <div class="plusebtn mx-auto text-white mt-0">PAUSE ||</div>
        </div>

        <div class="container-fluid mt-5 text-center">
            <h3 class="mb-5">You Deserve To Take A Break</h3>

            <div class="cards mx-sm-auto">
                <div class="card-body   ">
                    <a href="<?= $videoList[0]["youtube_link"] ?>" class=" card1 mb-sm-5 mb-5 mb-md-0 ">
                        <div class="text"><?= $videoList[0]["mentalhealth_title"] ?></div>
                    </a>

                        <a href="<?= $videoList[1]["youtube_link"] ?>" class=" card2 mb-sm-5 mb-5 mb-md-0">
                            <div class="text"><?= $videoList[1]["mentalhealth_title"] ?></div>
                        </a>
                </div>

                <div class="card-body   ">
                        <a href="<?= $videoList[2]["youtube_link"] ?>" class=" card3 mb-sm-5 mb-5 mb-md-0">
                            <div class="text"><?= $videoList[2]["mentalhealth_title"] ?></div>
                        </a>

                        <a href="<?= $videoList[3]["youtube_link"] ?>" class=" card4 mb-sm-5 mb-5 mb-md-0">
                            <div class="text"><?= $videoList[3]["mentalhealth_title"] ?></div>
                        </a>
                </div>
            </div>
        </div>

        <div class="mental-health text-center mt-lg-5">
            <h3>Your Mental Health is more than important your grades</h3>
            <div>
                <a href="userMentalTest.php"><img src="./storages/mentalhealthtest.png" alt="" class="testImg"></a>
                
            </div>
        </div>

    </div>


    <!-- Footer -->
    <?php include("./common/footer.php"); ?>
</body>

</html>