<?php
include "../Controller/dashboardNameController.php";
// session_start();
$userInfo = $_SESSION["userInfo"];

// echo "pre";
// print_r($userInfo);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Detail</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./resources/css/adminContact.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>

    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- css -->
    <link rel="stylesheet" href="./resources/css/patientDetail.css?v=<?= time() ?> ">
    <!-- root css -->
    <link rel="stylesheet" href="./resources/css/root.css">
</head>

<body class="skin-blue">
    <!-- Header -->
    <?php include("common/header.php"); ?>
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Appointment</span>
            <p class="content-header-text2"><small>Patient Details </small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="testDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="adminP&Padd.php">Appointment</a></li>
        </ol>
    </section>


    <!-- body -->
    <div action="" class="patient_detail">
        <p class="text-center title">Patient's Detail </p>
        <div class="detail">
            <p>Patient Name <span></span>:<span class="text_color"><?= $userInfo[0]["userna"] ?></span></p>
            <p>Phone No<span></span>:<span class="text_color"><?= $userInfo[0]["userph"] ?></span></p>
            <p>Age<span></span>:<span class="text_color"><?= $userInfo[0]["userage"] ?></span></p>
            <p>Gender<span></span>:<span class="text_color"><?php
                if ($userInfo[0]["usergen"] == 0) {
                    echo "Male";
                } else  if ($userInfo[0]["usergen"] == 1) {
                    echo "Female";
                } else  if ($userInfo[0]["usergen"] == 2) {
                    echo "Other";
                }
                ?></span>
                </p>
            <p>Address<span></span>:<span class="text_color"><?= $userInfo[0]["useradd"] ?></span></p>
            <p>Description<span></span>:<span class="text_color"><?= $userInfo[0]["des"] ?></span></p>
        </div>

        <div class="back">
            <a href="./adminAppointmentList.php" class="btnBack"><button class="btnBack" name="back" type="">Back</button></a>
        </div>
    </div>
    <!-- Footer -->
    <?php include("common/footer.php"); ?>
</body>
</html>

<!-- <div class="row title">
            <div class="col-0 col-md-12 col-sm-12">
                <p class="text-center">Patient's Detail </p>
            </div>
        </div>
        <div class="row pdBodybgcolor">
            <div class="col-0 col-md-2 col-sm-3"></div>
            <div class="col-0 col-md-3 col-sm-3 ms-3 column">
                <p>Patient Name:<?= $userInfo[0]["userna"] ?></p>
                <p>Phone No</p>
                <p>Age</p>
                <p>Gender</p>
                <p>Address</p>
                <p>Description</p>
            </div> -->

<!-- <div class="col-0 col-md-5 col-sm-3 ms-4 value">
                <p>:<?= $userInfo[0]["userna"] ?></p>
                <p>:<?= $userInfo[0]["userph"] ?></p>
                <p>:<?= $userInfo[0]["userage"] ?></p>
                <p>:
                    <?php
                    if ($userInfo[0]["usergen"] == 0) {
                        echo "Male";
                    } else  if ($userInfo[0]["usergen"] == 1) {
                        echo "Female";
                    } else  if ($userInfo[0]["usergen"] == 2) {
                        echo "Other";
                    }
                    ?>
                </p>
                <p>:<?= $userInfo[0]["useradd"] ?></p>
                <p>:<?= $userInfo[0]["des"] ?></p>
            </div> -->
<!-- <div class="col-0 col-md-2 col-sm-3"></div> -->
<!-- </div> -->

<!-- <div class="back">
        <a href="./adminAppointmentList.php" class="btnBack"><button class="btnBack" name="back" type="">Back</button></a>
    </div> -->