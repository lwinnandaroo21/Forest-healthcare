<?php
include "../Controller/dashboardNameController.php";
// session_start();
include "../Controller/profileUpdateController.php";
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./resources/css/adminContact.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/inputBox.css">
    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" /> -->
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <script src="./resources/js/uploadProfile.js" defer></script>
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

    <div class="container">
        <div class="adminHospitaladdTitle">Edit Profile Update</div>
        <form action="../Controller/profileUpdateController.php" class="form-horizontal hr adminContact-form" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-2 col-sm-2 col-2"></div>
                <div class="col-md-6  col-sm-8 col-8 mx-auto">
                    <img src="./image/<?= $adminInfo[0]["photo"] ?>" alt="" class="adminProfileUpdate" name="photo" id="profileImg">
                    <div class="adminProfileUpdateChoose">Upload a different photo</div>
                    <label for="Adminfile-upload" class="Admincustom-file-upload">
                        Choose File
                    </label>
                    <input id="Adminfile-upload" type="file" name="uploadFile" onchange="setImage()" />
                </div>
                <div class="col-md-3 col-sm-2 col-2"></div>
            </div>

            <div class="row">
                <div class="col-md-2 col-sm-2 col-2"></div>
                <div class="col-md-6  col-sm-8 col-8">

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control adminContactInput" id="usernaem" placeholder="Email Address" name="admin_email" value="<?= $adminInfo[0]["email_address"] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" class="form-control adminContactInput" id="usernaem" placeholder="Password" name="password" value="<?= $adminInfo[0]["password"] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Profile Name" name="name" value="<?= $adminInfo[0]["name"] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Phone Number" name="phone_no" value="<?= $adminInfo[0]["phone_no"] ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Address" name="address" value="<?= $adminInfo[0]["address"] ?>">
                        </div>
                        <input type="hidden" name="id" value="<?= $adminInfo[0]["id"] ?>" >
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6"></div>
                            <span class="col-md-3">
                                <input type="submit" value="Update" class="adminContactbtn" name="updateProfile">
                            </span>
                            <span class="col-md-3">
                                <input type="submit" value="Cancel" class="adminContactbtn adminProfileUpdatebtn">
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-3 col-sm-2 col-2"></div>

    <!-- Footer -->
    <?php include("common/footer.php"); ?>

</body>

</html>