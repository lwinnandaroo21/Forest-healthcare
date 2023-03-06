<?php
include "../Controller/dashboardNameController.php";
// session_start();
include "../Controller/profileEditController.php";
$adminInfo = $_SESSION["adminInfo"];

// echo "<pre>";
// print_r($adminInfo);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./resources/css/adminAboutUs.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/adminContact.css">
    <link rel="stylesheet" href="./resources/css/adminProfileView.css">

    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="skin-blue">
    <!-- Header -->
    <?php include("common/header.php"); ?>
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Account Setting</span>
            <p class="content-header-text2"><small>Account Setting Features</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="testDahboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Account Setting</li>
        </ol>
    </section>
    <!-- Header -->

    <div class="container d-flex flex-column justify-content-center align-items-center ">
        <div class="title">Admin Profile</div>
        <div class="d-flex justify-content-center m-3 mt-sm-3 mb-sm-3 mt-md-3 mb-md-3 mt-3 ">
            <img src="./image/<?=$adminInfo[0]["photo"]?>" alt="" class="profilePic m-3 ms-md-auto ms-sm-auto">
        </div>
        <div class="box mt-3 ">
            <table>
                <tr>
                    <td class="left_text">E-mail</td>
                    <td class="right_text "><?= $adminInfo[0]["email_address"] ?></td>
                </tr>
                <tr>
                    <td class="left_text">Password</td>
                    <td class="right_text"><?= $adminInfo[0]["password"] ?></td>
                </tr>
                <tr>
                    <td class="left_text">Username</td>
                    <td class="right_text"><?= $adminInfo[0]["name"] ?></td>
                </tr>
                <tr>
                    <td class="left_text"> Phone No.</td>
                    <td class="right_text"><?= $adminInfo[0]["phone_no"] ?></td>
                </tr>
                <tr>
                    <td class="left_text">Address</td>
                    <td class="right_text"><?= $adminInfo[0]["address"] ?> </td>
                </tr>
            </table>
        </div>
        <div class="buttons d-flex">
            <a href="../Controller/profileEditController.php"><button type="button" class="btn btnUpdate">Update</button></a>
            <button type="button" class="btn btn-danger">Cancel</button>
        </div>
    </div>

    <!-- Footer -->
    <?php include("common/footer.php"); ?>
</body>

</html>