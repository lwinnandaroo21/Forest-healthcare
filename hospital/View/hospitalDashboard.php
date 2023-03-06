<?php
// include "../Controller/hospitalAppointmentistController.php";
// include "../Controller/dashboardNameController.php";
include "../Controller/hospitalDashboardController.php";
include "../Controller/dashboardNameController.php";


// echo "<pre>";
// print_r($appointmentList);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Appointment List</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- <link rel="stylesheet" href="./resources/css/hospitalAddDoctor.css?"> -->
    <link rel="stylesheet" href="./resources/css/main.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


    <!-- <script src="./resources/bootstrap/js/bootstrap.min.js" defer></script> -->

    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/hospitalAppointmentList.css" rel="stylesheet" type="text/css" />
    <!-- root css -->
    <link rel="stylesheet" href="./resources/css/root.css">
    <script src="./resources/js/jquery3.6.0.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="./resources/js/hospitaLdashboard.js" defer></script>

</head>

<body class="skin-blue">
    <!-- Header -->
    <?php include("common/header.php"); ?>
<!-- Header -->
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Dashboard</span>
            <p class="content-header-text2"><small>Dashboard Features</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <!-- Header -->

    <section class="content">
        <div class="row">
            <div class=col-lg-1></div>

            <div class="col-lg-2 col-xs-6">
                <div class="small-box">
                    <div class="inner">
                        <h3><?= $totalAppt[0]["totalAppt"] ?></sup></h3>
                        <p>Appointments</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar-o" aria-hidden="true"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-xs-6">
                <div class="small-box">
                    <div class="inner">
                        <h3><?= $totalDoctor[0]["totalDoctor"] ?></h3>
                        <p>Doctors</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-user-md" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-8 col-md-12 col-sm-12">
            <div>
                <canvas id="myChart"></canvas>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>

    <div class="row mt-5">
        <div class="col-lg-1"></div>
        <div class="col-lg-5 col-md-5 col-sm-12">
            <div>
                <canvas id="myChartPie"></canvas>
            </div>
        </div>
        <div class="col-lg-4 col-md-5 col-sm-12">
            <div>
                <canvas id="myChartPie1"></canvas>
            </div>
        </div>
        <div class="col-lg-1"></div>
    </div>

    <!-- Footer -->
    <?php include("common/footer.php"); ?>
    <script>
        // let ages = <?= json_encode($ages) ?>;
        // let pieData = [0, 0, 0];

        // for (let index = 0; index < ages.length; index++) {
        //     if (ages[index] < 18) {
        //         pieData[0] += 1;
        //     } else if (18 < ages[index] && ages[index] < 65) {
        //         pieData[1] += 1;
        //     } else if (ages[index] > 65) {
        //         pieData[2] += 1;
        //     }
        // };


        // let gender = <?= json_encode($gender) ?>;
        // let pieData1 = [0, 0, 0];

        // for (let index = 0; index < gender.length; index++) {
        //     if (gender[index] == 0) {
        //         pieData1[0] += 1;
        //     } else if (gender[index] == 1) {
        //         pieData1[1] += 1;
        //     } else if (gender[index] == 2) {
        //         pieData1[2] += 1;
        //     }
        // };

        let totalApptGraph = <?= json_encode($totalApptGraph) ?>;
        let apptDataList = [];
        for (let index = 0; index < totalApptGraph.length; index++) {
            apptDataList.push(totalApptGraph[index].totalApptGraph);
        }
        console.log(apptDataList);
    </script>
</body>
<script>
    // $('#myModal').modal('show')
</script>

</html>