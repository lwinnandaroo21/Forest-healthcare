<?php

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
    <link rel="stylesheet" href="./resources/css/adminContact.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
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
</head>

<body class="skin-blue">

    <!-- Header -->
    <?php include("common/header.php"); ?>
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Contact Us</span>
            <p class="content-header-text2"><small>Contact Us Features</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="testDahboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Contact Us</li>
        </ol>
    </section>
    <!-- Header -->


    <div class="container">
        <div class="row">
            <br>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-2"></div>
            <div class="col-md-6  col-sm-8 adminContact-col">
                <form action="../Controller/adminContactUsController.php" method="post" class="form-horizontal hr adminContact-form">
                    <div class="form-group">

                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Title" name="title">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Phone Number" name="phNo">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" class="form-control adminContactInput" id="usernaem" placeholder="Email Address" name="email">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="Location" name="address">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea type="text" rows="3" class="form-control adminContactTextarea" id="usernaem" placeholder="Welcome Text" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <!-- <input type="button" value="Submit" class="adminContactbtn"> -->
                                <button class="btn btn-warning col-10 boxStyle contactsendButton adminContactbtn" name="submitBtn" type="submit">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-2"></div>
        </div>
        <br>
        <p></p>
    </div>
    <!-- Footer -->
    <?php include("common/footer.php"); ?>
</body>

</html>