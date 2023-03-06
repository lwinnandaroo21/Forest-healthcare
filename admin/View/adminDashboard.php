<?php
include "../Controller/adminDashboardController.php";

include "../Controller/dashboardNameController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./resources/css/adminDashboard.css?v=" <?= time() ?>>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./resources/js/adminDashboard.js" defer></script>

</head>

<body class="skin-blue">

    <!-- Header -->
    <?php include("common/header.php"); ?>
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Dashboard</span>
            <p class="content-header-text2"><small>Dashboard Features</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="testDahboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- Header -->

    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class=col-lg-1></div>
            <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Users</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <!--col -->
            <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box">
                    <div class="inner">
                        <h3>150</h3>
                        <p>Visitors</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-users" aria-hidden="true"></i>
                    </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box">
                    <div class="inner">
                        <h3>53<sup style="font-size: 20px">%</sup></h3>
                        <p>Appointments</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    </div>

                </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box">
                    <div class="inner">
                        <h3>44</h3>
                        <p>Hospitals</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-hospital-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box">
                    <div class="inner">
                        <h3>65</h3>
                        <p>Doctors</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-md" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <!--col -->
        </div>
    </section><!-- content -->

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <div>
                <canvas id="myChart1"></canvas>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>


    <!-- Footer -->
    <?php include("common/footer.php"); ?>

    <script>
        let ages = <?= json_encode($ages) ?>;
        let pieData = [0, 0, 0];

        for (let index = 0; index < ages.length; index++) {
            if (ages[index] < 18) {
                pieData[0] += 1;
            } else if (18 <ages[index]&& ages[index]<65) {
                pieData[1] += 1;
            } else if (ages[index] > 65) {
                pieData[2] += 1;
            }
        };
    </script>

</body>

</html>