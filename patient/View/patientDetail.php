<?php

session_start();
$userInfo = $_SESSION["userInfo"];

// echo "pre";
// print_r($userInfo);
?>

<!DOCTYPE html>
<html lang="en">

<head><?php
include "../Controller/appHistoryController.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Detail</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/all.css" />
    <link rel="stylesheet" href="./resources/css/apptHistory.css" />

    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>
    <!-- Header -->

    <div class="row mt-3">
        <div class="col-lg-3 ms-5">
            <div class="row  menubox">
                <div class="col-2 offset-2">
                    <div><i class="fa-solid fa-user fs-5 mt-5"></i></div>
                    <div><i class="fa-regular fa-calendar-check fs-5 mt-5"></i></div>
                    <div><i class="fa-solid fa-user-gear fs-5 mt-5"></i></div>
                    <div><i class="fa-solid fa-right-from-bracket fs-5 mt-5"></i></div>
                </div>
                <div class="col-6 fw-bold">
                    <div class=" mt-5"><a href="" class="text-dark">My Profile</a></div>
                    <div class=" mt-5"><a href="" class="text-dark">Appointment History</a></div>
                    <div class=" mt-5"><a href="" class="text-dark">Account Setting</a></div>
                    <div class="mt-5 mb-5"> <a href="" class="text-dark">Logout</a></div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
        <div class="">
        <div class="row title">
            <div class="col-12 col-md-12 col-sm-12">
                <p class="text-center">Patient's Detail </p>
            </div>
        </div>
        <div class="row pdBodybgcolor">
            <div class="col-2 col-md-2 col-sm-2"></div>
            <div class="col-3col-md-3 col-sm-3 ms-3">
                <p>Patient Name</p>
                <p>Phone No</p>
                <p>Age</p>
                <p>Gender</p>
                <p>Address</p>                
                <p>Description</p>
            </div>

            <div class="col-5 col-md-5 col-sm-5 ms-4">
                <p>: <?= $userInfo[0]["name"] ?></p>
                <p>: <?= $userInfo[0]["phone_no"] ?></p>
                <p>: <?= $userInfo[0]["age"] ?></p>
                <p>: <?= $userInfo[0]["gender"] ?></p>
                <p>: <?= $userInfo[0]["address"] ?></p>               
                <p>: <?= $userInfo[0]["appdes"] ?></p>
            </div>
            <div class="col-2 col-md-2 col-sm-2"></div>
        </div>
    </div>
                    <!-- <tr>
                        <th scope="row">1</th>                        
                        <td>Dr.John</td>
                        <td>Hospital 2</td>
                        <td>9AM-11AM(SUN)</td>
                        <td><button class="btnview">View</button></td>
                        <td>Approved</td>
                        <td></td>
                    </tr> -->

                </tbody>
            </table>
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/adminContact.css?v="<?= time() ?>>
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <!-- <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
    
    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
   <!-- css -->
   <link rel="stylesheet" href="./resources/css/patientDetail.css?v=<?= time() ?> ">
    <!-- root css -->
    <link rel="stylesheet" href="./resources/css/root.css">
</head>

<body class="skin-blue">
    <!-- Header -->
    <?php include("common/header.php"); ?>
    <br>

    <!-- body -->
    <div class="">
        <div class="row title">
            <div class="col-12 col-md-12 col-sm-12">
                <p class="text-center">Patient's Detail </p>
            </div>
        </div>
        <div class="row pdBodybgcolor">
            <div class="col-2 col-md-2 col-sm-2"></div>
            <div class="col-3col-md-3 col-sm-3 ms-3">
                <p>Patient Name</p>
                <p>Phone No</p>
                <p>Age</p>
                <p>Gender</p>
                <p>Address</p>                
                <p>Description</p>
            </div>

            <div class="col-5 col-md-5 col-sm-5 ms-4">
                <p>: <?= $userInfo[0]["name"] ?></p>
                <p>: <?= $userInfo[0]["phone_no"] ?></p>
                <p>: <?= $userInfo[0]["age"] ?></p>
                <p>: <?= $userInfo[0]["gender"] ?></p>
                <p>: <?= $userInfo[0]["address"] ?></p>               
                <p>: <?= $userInfo[0]["appdes"] ?></p>
            </div>
            <div class="col-2 col-md-2 col-sm-2"></div>
        </div>
    </div>
        <!-- Footer -->
        <?php include("common/footer.php"); ?>
</body>

</html>