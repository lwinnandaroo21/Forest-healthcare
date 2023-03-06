<?php
include "../Controller/dashboardNameController.php";
// session_start();
include "../Model/dbConnection.php";
$articleDetail = $_SESSION["articleDetail"];

// print_r($articleDetail);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./resources/css/root.css">
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

    <link rel="stylesheet" href="./resources/css/editArticle.css">
</head>

<body class="skin-blue">

    <!-- Header -->
    <?php include("common/header.php"); ?>
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Health Knowledge</span>
            <p class="content-header-text2"><small>To edit Health article</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="testDahboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Health Knowledge</li>
        </ol>
    </section>


    <!-- <div class="row float-sm-start ">
        <div class="diseaseListTitle  col-7 col-sm-6 ">
            Admin >> Post >> Conditions & Services
        </div>
        <div class="diseaseListTitle col-5 col-sm-6 ">
            Edit disease condtions
        </div>
    </div> -->
    <!-- form -->
    <div class="container mx-auto ">
        <div class="row">
            <div class="col-md-1 col-sm-1 col-1"></div>
            <div class="col-md-9  col-sm- col-9 adminAbout-col">
                <form action="../Controller/articleUpdateController.php" class="form-horizontal hr adminContact-form" method="POST" enctype="multipart/form-data">
                    <div class="subtitleAboutus">Topic Name</div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="usernaem" placeholder="" name="title" value="<?php echo $articleDetail[0]["title"] ?>">
                        </div>
                    </div>

                    <div class="subtitleAboutus mt-3">Cover photo</div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="file" id="myFile"  name="photo" value="<?php echo $articleDetail[0]["photo"] ?>">
                        </div>
                    </div>

                    <div class="subtitleAboutus">Content detail</div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="" id="floatingTextarea" name="description" value=""><?= $articleDetail[0]["description"] ?></textarea>
                                <label for="floatingTextarea"></label>
                            </div>
                            <input type="hidden" name="id" value="<?= $articleDetail[0]["id"] ?>" >
                        </div>
                    </div>

                    <div class="form-group mx-auto me-md-3 me-sm-3 ms-5">
                        <a href="../Controller/articleUpdateController.php"><input type="submit" value="Save Changes" class="btn btnSave mt-3 mx-auto" name="updateArticle"></a>
                    </div>
                </form>
            </div>

        </div>
        <div class="col-md-1 col-sm-1 col-1"></div>
    </div>
    </div>

    <!-- <div class="footer d-flex justify-content-center align-items-center">
        <div class="diseaseListTitle   mx-auto m-sm-auto mt-sm-3 m-3 mt-md-3 mt-3">
            <a href="#">Click to edit and see the list</a>
        </div>
    </div> -->
    <!-- Footer -->
    <?php include("common/footer.php"); ?>

</body>

</html>