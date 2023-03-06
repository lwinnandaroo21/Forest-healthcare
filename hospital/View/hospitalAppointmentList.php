<?php
include "../Controller/hospitalAppointmentistController.php";
// include "../Controller/dashboardNameController.php";
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
    <link rel="stylesheet" href="./resources/css/hAddDoctor.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/main.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />


    <!-- <script src="./resources/bootstrap/js/bootstrap.min.js" defer></script> -->

    <!-- FontAwesome 4.3.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./resources/js/hospitalAppointmentList.js"></script>


</head>

<body class="skin-blue">
    <!-- Header -->
    <?php include("common/header.php"); ?>
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Appointment</span>
            <p class="content-header-text2"><small>Appointment List Feature</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="./hospitalDashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Appointment</li>
        </ol>
    </section>

    <!-- body -->
    <div class="container ">
        <br>
        <div class="row mt-5">
            <div class="col-md-1 col-sm-1 col-2"></div>
            <div class="col-md-8 col-sm-10 mx-auto table-responsive">
                <h3 class="text-center totalappment">Total Appointment List</h3>
                <table class="table">
                    <thead class="doctorTable">
                        <tr class="title">
                            <th scope="col">No</th>
                            <th scope="col">Patient Name</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">DateTime</th>
                            <th scope="col">Patient Detail</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        <?php foreach ($appointmentList as $key => $appointment) { ?>
                            <tr>
                                <td scope="row"><?= $count++; ?>.</td>
                                <td><?= $appointment["username"] ?></td>
                                <td><?= $appointment["docname"] ?></td>
                                <td><?= $appointment["docday"] ?><?= "(" ?><?= $appointment["docstarttime"] ?><?= "~" ?><?= $appointment["docendtime"] ?><?= ")" ?></td>
                                <td><a href="../Controller/patientDetailController.php?id=<?= $appointment["id"] ?>" class="view"><button class="btnview">view</button></a></td>
                                <td>
                                    <button type="button" onclick="modal(<?= $appointment['status'] ?>,<?= $appointment['id'] ?>)" class="btn btn-primary" data-toggle="modal" data-target="#modal">
                                        <?php
                                        if ($appointment["status"] == 0) {
                                            echo "Pending";
                                        } else  if ($appointment["status"] == 1) {
                                            echo "Approved";
                                        } else  if ($appointment["status"] == 2) {
                                            echo "Reject";
                                        }
                                        ?>
                                    </button>
                                </td>
                                <td>
                                    <a href="../Controller/hospitalAppointmentDeleteController.php?id=<?= $appointment['id'] ?>"><i class="fa-solid fa-trash-can trash"></i></a>
                                </td>
                            </tr>

                        <?php } ?>

                        <!-- <tr>
                            <td>U Nana</td>
                            <td>Dr John</td>
                            <td>2022-2-2</td>
                            <td><button class="btnview">view</button></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                                        Dropdown
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td>Qr</td>
                        </tr> -->

                    </tbody>
                </table>
                <!-- Pagination -->
                <nav aria-label="Page navigation example" class="mx-auto">
                    <ul class="pager">
                        <li class="
                <?php if ($page <= 1) {
                    echo "btn disabled";
                } ?>
                "><a href="?page=<?= $page - 1 ?>">&laquo;</a></li>

                        <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                            <li><a href="?page=<?= $i ?>" class=" btnNum
                    <?php
                            if ($page == $i) {
                                echo "active";
                            }
                    ?>"> <?= $i ?> <span class="sr-only">(current)</span></a></li>
                        <?php } ?>

                        <li class="
                <?php if ($page >= $totalPages) {
                    echo "btn disabled";
                } ?>">
                            <a href="?page=<?= $page + 1 ?>">&raquo;</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>


        <div class="col-md-1 col-sm-1 col-2"></div>
        <!-- Footer -->
        <?php include("common/footer.php"); ?>
</body>

</html>