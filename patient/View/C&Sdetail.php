<?php
session_start();
$diseaseDetailInfo = $_SESSION["diseaseDetail"];
include "../Controller/hospitalListController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition and service detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/C&S.css">
    <link rel="stylesheet" href="./resources/css/all.css" />
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
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-8 col-sm-12 detailbg">
                <a href="C&S.php" class="back"><i class="fa-regular fa-circle-left"></i>Go Back</a>
                <div class="detailTitle"><?= $diseaseDetailInfo[0]["disease_title"] ?></div>
                <div class="detailbody"><?= $diseaseDetailInfo[0]["disease_detail"] ?></div>
                <div class="CSimg">
                    <img src="./storages/C&S/<?= $diseaseDetailInfo[0]["cs_photo"] ?>" alt="" class="CSdetailimg">
                </div>
                <div class="treatmentTitle">You Can Make Treatment At</div>

                <?php foreach ($hospitalList as $key => $hospital) { ?>
                    <div class="CSLocation">
                        <div class="mt-3">
                            <i class="fa-solid fa-stethoscope iconColor text-dark"></i>
                            <span class="CSdetailTitle"><?= $hospital["name"] ?></span>
                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-location-dot iconColor text-dark"></i>
                            <span class="address"><?= $hospital["address"] ?></span>
                        </div>
                        <div class="mt-3">
                            <i class="fa-solid fa-phone iconColor text-dark"></i>
                            <span><?= $hospital["phone_no"] ?></span>
                        </div>



                    </div>
                <?php  } ?>

                <!-- <div class="CSLocation">
                    <div class="CSdetailTitle">Grand Hantha Hospital</div>
                    <div class="address">Bayint Naung Tower 2, Yangon</div>
                    <i class="fa-solid fa-phone-flip"></i>
                    <span>01-2150776</span>
                </div>
                <div class="CSLocation">
                    <div class="CSdetailTitle">Grand Hantha Hospital</div>
                    <div class="address">Bayint Naung Tower 2, Yangon</div>
                    <i class="fa-solid fa-phone-flip"></i>
                    <span>01-2150776</span>
                </div>
                <div class="CSLocation">
                    <div class="CSdetailTitle">Grand Hantha Hospital</div>
                    <div class="address">Bayint Naung Tower 2, Yangon</div>
                    <i class="fa-solid fa-phone-flip"></i>
                    <span>01-2150776</span>
                </div> -->
            </div>
            <div class="col-md-4 col-sm-12 detailbg2">
                <div class="anxeity">
                    <img src="./storages/C&Sdetail2.png" alt="">
                    <div>ANXEITY</div>
                    <div>“No need to hurry. No need to sparkle. No need to be anybody but oneself.”</div>
                </div>
                <div class="healing">
                    <img src="./storages/C&Sdetail3.png" alt="">
                    <div>HEALING</div>
                    <div>“Healing requires from us to stop struggling, but to enjoy life more and endure it less.”</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include("./common/footer.php"); ?>
</body>

</html>