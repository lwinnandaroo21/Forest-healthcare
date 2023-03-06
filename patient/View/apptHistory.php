<?php
include "../Controller/appHistoryController.php";
// include "../Controller/qrcode/phpqrcode/qrlib.php";
include "./resources/lib/phpqrcode/qrlib.php"


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/all.css" />
    <link rel="stylesheet" href="./resources/css/apptHistory.css" />

    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="./resources/css/userProfile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./resources/js/uploadProfile.js?v=" <?= time() ?> defer></script>

</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>
    <!-- Header -->
    <div class="container-fluid box">
        <div class="row">
            <div class="col-md-3 col-sm-8 col-8 mx-auto ">
                <div class="menubox">
                    <div class="row mt-5 d-flex justify-content-between">
                        <div class="col-5 icons"><i class="fa-solid fa-user fs-5 "></i></div>
                        <div class="col-7 "><a href="./userProfile.php" class="text-dark">My Profile</a></div>
                    </div>
                    <div class="row mt-5 d-flex justify-content-between">
                        <div class="col-5 icons"><i class="fa-regular fa-calendar-check fs-5 myProfile"></i></div>
                        <div class="col-7 "><a href="./apptHistory.php" class="myProfile">Appointment History</a></div>
                    </div>
                    <div class="row mt-5 d-flex justify-content-between">
                        <div class="col-5 icons"><i class="fa-solid fa-user-gear fs-5 "></i></div>
                        <div class="col-7 "><a href="./accountSetting.php" class="text-dark">Account Setting</a></div>
                    </div>
                    <div class="row mt-5 d-flex justify-content-between">
                        <div class="col-5 icons"><i class="fa-solid fa-right-from-bracket fs-5 "></i></div>
                        <div class="col-7 btn text-dark fw-bold text-start text-decoration-underline" data-bs-toggle="modal" data-bs-target="#exampleModal"> Logout</div>
                    </div>
                </div>
            </div>
            <!--Log Out Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content ">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">
                            </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                            <div class="photo mx-auto ">
                                <img src="./storages/LogOut-logo.png" alt="" width="160px">
                            </div>
                            <div class="fw-bold fs-3 mt-3">Log Out?</div>
                            <div>Are you sure to leave?</div>
                        </div>
                        <div class="modal-footer mx-auto">
                            <button type="button" class="btn btn-danger btnCancel me-3" data-bs-dismiss="modal">Cancel</button>
                            <a href="../Controller/logOutC.php" type="button" class="btn btnLogOut ">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-sm-8 table-responsive  mx-auto">
                <!-- <?php echo $totalRecord;
                        echo $totalPages
                        ?> -->
                <h3 class="text-center mt-3">Your Booking History</h3><br>
                <table class="table">
                    <thead>
                        <tr class="title">
                            <th scope="col">No</th>
                            <th scope="col">Your Name</th>
                            <th scope="col">Hospital</th>
                            <th scope="col">Doctor</th>
                            <th scope="col">Date&Time</th>
                            <th scope="col">Description</th>
                            <th scope="col">Status</th>
                            <th scope="col">QR Code</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        <?php foreach ($appointmentList as $key => $appointment) {
                            if ($appointment["status"] == 1) {
                                // $text =  $appointment["qrcode"];
                                // //  echo $text ;
                                // QRcode::png($text, "./qrcodePhotos/" . $appointment["id"] . ".png");
                                $text =  $appointment["id"];
                                QRcode::png($text, "./qrcodePhotos/" . $appointment["id"] . ".png");

                                // $text = $appointment["id"];
                                // QRcode::png($text, "./qrcodePhotos/" . $appointment["id"] . ".png");

                            } ?>
                            <tr>
                                <td scope="row"><?= $count++; ?>.</td>
                                <td><?= $appointment["username"] ?></td>
                                <td><?= $appointment["hosname"] ?></td>
                                <td><?= $appointment["docname"] ?></td>
                                <td><?= $appointment["docday"] ?><?= "(" ?><?= $appointment["docstarttime"] ?><?= "~" ?><?= $appointment["docendtime"] ?><?= ")" ?></td>
                                <td><?= $appointment["description"] ?></td>
                                <!-- <td><button class="btnview"><a href="../Controller/patientDetailController.php?id=<?= $appointment["userid"] ?>">View</a></button></td> -->
                                <td>
                                    <label type="" class="statusLabel">
                                        <?php
                                        if ($appointment["status"] == 0) {
                                            echo "Pending";
                                        } else  if ($appointment["status"] == 1) {
                                            echo "Approved";
                                        } else  if ($appointment["status"] == 2) {
                                            echo "Sorry! full of appointments";
                                        }
                                        ?>
                                    </label>
                                </td>
                                <td>
                                    <?php
                                    if ($appointment["status"] == 1) {
                                    ?>
                                        <img src="./qrcodePhotos/<?= $appointment["id"] ?>.png" width="70" alt="qrcode">

                                    <?php   } ?>
                                </td>
                            </tr>
                        <?php } ?>
                        <td>

                        </td>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center paper">
                        <li class="page-item
                        <?php if ($page <= 1) {
                            echo "disabled";
                        } ?>
                ">
                            <a class="page-link" href="?page=<?= $page - 1 ?>" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $totalPages; $i++) { ?>
                            <li class="page-item
                            <?php
                            if ($page == $i) {
                                echo "active";
                            }
                            ?>
                            "><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                        <?php } ?>


                        <li class="page-item
                        <?php if ($page >= $totalPages) {
                            echo "disabled";
                        } ?>
                ">
                            <a class="page-link" href="?page=<?= $page + 1 ?>" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php include("./common/footer.php"); ?>
    <!-- footer -->

</body>

</html>

<!-- offcanvas -->
<!-- <button class="btn btn-primary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasResponsive" aria-controls="offcanvasResponsive">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="alert alert-info d-none d-lg-block">Resize your browser to show the responsive offcanvas toggle.</div>
                <div class="offcanvas-lg offcanvas-start" tabindex="-1" id="offcanvasResponsive" aria-labelledby="offcanvasResponsiveLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasResponsiveLabel">Responsive offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#offcanvasResponsive" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <p class="mb-0">This is content within an <code>.offcanvas-lg</code>.</p>
                    </div>
                </div> -->
<!-- </div>