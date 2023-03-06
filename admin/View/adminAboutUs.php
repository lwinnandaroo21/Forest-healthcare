

<!-- Create:Nandar(5.10.2022)
Update:Nandar(11.10.2022)
Admin about us adding -->

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
    <link rel="stylesheet" href="./resources/css/adminAboutUs.css?v="<?=time()?>>
    <link rel="stylesheet" href="./resources/css/adminContact.css?v="<?=time()?>>
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./resources/css/root.css">
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
            <span class="content-header-text1">About Us</span>
            <p class="content-header-text2"><small>About Us Features</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="testDahboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">About Us</li>
        </ol>
    </section>
    <!-- Header -->

    <!-- body start -->
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-2"></div>
            <div class="col-md-6  col-sm-8 col-8 adminAbout-col">
                <form action="../Controller/aboutUsController.php" method="post" class="form-horizontal hr adminContact-form">
                    <div class="subtitleAboutus">Change About Us Page</div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem"  placeholder="Title" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <!-- <label for="username" class="control-label col-md-4">Username</label> -->
                        <div class="col-md-12">
                            <textarea rows="3" type="text" class="form-control adminContactTextarea" id="usernaem" placeholder="Welcome Text" name="description"></textarea>
                        </div>
                    </div>
                    <!-- <div class="subtitleAboutus">Change Photo or Picture</div>
                    <div class="form-group">
                        <div class=" col-md-12 selectBoxAboutus">
                            <label for="Aboutfile-upload" class="Aboutcustom-file-upload">
                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                Select
                            </label>
                            <input id="Aboutfile-upload" type="file" name="photo"/>
                            <div id="Aboutfile-chosen">No file chosen</div>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <!-- <input type="button" value="Change" name="changeBtn" class="adminContactbtn"> -->
                                <button class="btn btn-warning col-10 boxStyle contactsendButton adminContactbtn" name="changeBtn" type="submit">Change</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-3 col-sm-2 col-2"></div>
        </div>
    </div>
    <!-- body end -->

    <!-- Footer -->
    <?php include("common/footer.php"); ?>


    <script src="./resources/js/adminAboutUs.js"></script>
    
</body>

</html>