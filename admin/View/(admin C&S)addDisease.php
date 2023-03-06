<?php

include "../Controller/C&SDiseaseListController.php";
include "../Controller/dashboardNameController.php";


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
    <link rel="stylesheet" href="./resources/css/AdminDoctorList.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/adminContact.css">
    <link rel="stylesheet" href="./resources/css/adminAboutUs.css">
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="./resources/css/addDisease.css">
</head>

<body class="skin-blue">

    <!-- Header -->
    <?php include("common/header.php"); ?>
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Condition & Services</span>
            <p class="content-header-text2"><small>To add new disease</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="testDahboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="(admin C&S)addDisease.php">Condition&Service</a></li>
        </ol>
    </section>

    <!-- <div class=" diseaseListTitle m-sm-auto mt-sm-3 mb-sm-3 mb-md-3 mb-3">
        <b> Admin >> Post >> Condition & Services</b>
    </div>

    <div class="container m-auto ms-auto bg-white">
        <div class="diseaseListTitle m-sm-auto mt-sm-3 mb-sm-3 mb-md-3 mb-3"><b>
                To add new disease
            </b></div> -->
    <div class="container m-auto ms-auto">
        <div class="row">
            <div class="col-md-1 col-sm-1 col-1"></div>
            <div class="col-md-9  col-sm-9 col-9 adminAbout-col">

                <form action="../Controller/C&SaddDiseaseController.php" class="form-horizontal hr adminContact-form" method="POST" enctype="multipart/form-data">
                    <div class="subtitleAboutus">Topic Name</div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="" name="topic">
                        </div>
                    </div>

                    <div class="subtitleAboutus mt-3">Cover photo</div>
                    <div class="form-group">
                        <div class=" col-md-12 selectBoxAboutus">
                            <label for="file-upload" class="custom-file-upload">
                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                Upload Image
                            </label>
                            <input id="file-upload" type="file" name="photo" />
                            <div id="CSfile-chosen">No file chosen</div>
                        </div>
                    </div>

                    <div class="subtitleAboutus">Content detail</div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control adminContactInput" placeholder="" id="floatingTextarea" name="detail"></textarea>
                                <label for="floatingTextarea"></label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <button class="btn btnSave mt-3" name="diseaseBtn" type="submit">Save</button>
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1 col-sm-1 col-1"></div>
        </div>
    </div>

    <!-- <div class="footer">
        <div class="diseaseListTitle m-sm-auto mt-sm-3 m-3 mt-md-3 mt-3">
            <a href="#">Click to edit and see the list</a>
        </div>
    </div> -->
    
    <script src="./resources/js/CS.js"></script>
    <!-- Footer -->
    <?php include("common/footer.php"); ?>
</body>

</html>