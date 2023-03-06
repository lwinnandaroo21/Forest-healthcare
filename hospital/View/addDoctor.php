<?php

include "../Controller/departmentListController.php";
include "../Controller/dashboardNameController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./resources/css/addDoctor.css?v=" <?= time() ?>>
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
            <span class="content-header-text1">Doctor</span>
            <p class="content-header-text2"><small>Add Doctor</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Doctor</li>
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
                <form action="../Controller/addDoctorController.php" class="form-horizontal hr adminContact-form" method="POST" enctype="multipart/form-data">
                    <div class="form-group">

                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="Name" placeholder="Name" name="name">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="file-upload" class="custom-file-upload">
                                <i class="fa-solid fa-arrow-up-from-bracket"></i>
                                Upload Image
                            </label>
                            <input id="file-upload" type="file" name="photo" />
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <select class="form-select" aria-label="Default select example" name="department">
                                <?php foreach ($departmentList as $key => $department) { ?>
                                    <option value="<?= $department["id"] ?>"><?= $department["name"] ?></option>
                                <?php } ?>
                                <!-- <option selected>Department</option>
                                <option value="1">Neurology</option>
                                <option value="2">Neurology</option>
                                <option value="3">Neurology</option> -->
                            </select>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <div class="col-md-12">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                    Department
                                    <span class="caret"></span>
                                </button>
                                

                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Neurology</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Neurology</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Neurology</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Neurology</a></li>
                                </ul>
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="date" placeholder="Day" name="day">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            Start Time<input type="time" class="form-control adminContactInput" id="startTime" name="startTime">
                            End Time <input type="time" class="form-control adminContactInput" id="endTime" name="endTime">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="expertIn" placeholder="Expert In" name="expertIn">
                        </div>
                    </div>
                    <div class="form-group">

                        <div class="col-md-12">
                            <input type="email" class="form-control adminContactInput" id="Email" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="phNo" placeholder="Pn No" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea type="text" rows="3" class="form-control adminContactTextarea" id="address" placeholder="Address" name="address"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea type="text" rows="3" class="form-control adminContactTextarea" id="address" placeholder="Degree" name="degree"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                            <button class="btn adminContactbtn" name="addDoctoreBtn" type="submit">Submit</button>
                                <!-- <input type="button" value="Submit" class="adminContactbtn" name="addDoctoreBtn"> -->
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