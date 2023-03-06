<?php

session_start();

include "../Model/dbConnection.php";
if (isset($_SESSION["user_email"])) {
    $email = $_SESSION["user_email"];
}

$sql = $pdo->prepare("
SELECT * FROM tbl_user 
WHERE email_address = :email
");
$sql->bindValue(":email", $email);
$sql->execute();

$patientInfo = $sql->fetchAll(PDO::FETCH_ASSOC);

$_SESSION["patientInfo"] = $patientInfo;
$patientInfo = $_SESSION["patientInfo"];

// echo "<pre>";
// print_r($patientInfo);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/userProfile.css">
    <link rel="stylesheet" href="./resources/css/profileColor.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/all.css" />
    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./resources/js/uploadProfile.js?v=" <?= time() ?> defer></script>

</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>
    <div class="container-fluid box">
        <div class="row">
            <div class="col-md-3 col-sm-8 col-8 mx-auto ">
                <div class="menubox">
                    <div class="row mt-5 d-flex justify-content-between">
                        <div class="col-5 icons"><i class="fa-solid fa-user fs-5 myProfile"></i></div>
                        <div class="col-7 "><a href="./userProfile.php" class="myProfile">My Profile</a></div>
                    </div>
                    <div class="row mt-5 d-flex justify-content-between">
                        <div class="col-5 icons"><i class="fa-regular fa-calendar-check fs-5"></i></div>
                        <div class="col-7 "><a href="./apptHistory.php" class="text-dark">Appointment History</a></div>
                    </div>
                    <div class="row mt-5 d-flex justify-content-between">
                        <div class="col-5 icons"><i class="fa-solid fa-user-gear fs-5"></i></div>
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
                            <a href="../Controller/logOutC.php" type="button" class="btn btnLogOut text-white">Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Log Out Modal -->

            <div class="col-md-7  col-sm-8 adminContact-col  mx-auto">
                <form action="../Controller/userProfileEditController.php" class="form-horizontal hr adminContact-form" method="post" enctype="multipart/form-data">

                    <div class="myProfileTitle">My Profile</div>
                    <span class="userProfileConfirmbtnfloat">
                        <div class="profilebg">
                            <img src="./storages/userProfile/<?= $patientInfo[0]["photo"] ?>" alt="" id="profileImg" class="userProfileUpdate" name="photo">
                        </div>

                        <!-- <label for="userfile-upload" class="usercustom-file-upload">
                            <i class="fa-solid fa-camera"></i>
                        </label> -->
                        <!-- <input id="userfile-upload" type="file" onchange="setImage()" name="uploadFile" /> -->
                    </span>
                    <span>
                        <input type="submit" value="Edit" class="adminContactbtn" name="updateProfile">
                    </span>

                    <div class="form-group userProfileInputfloat">
                        <label for="username" class="userProfileLabel col-md-5">Username</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" id="username" value="<?= $patientInfo[0]["name"] ?>" placeholder="John" name="name" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Password<i class="far fa-eye" id="togglePassword" style=" cursor: pointer;"></i></label>
                        <div class="col-md-12">
                            <input type="password" class="form-control adminContactInput" id="password" value="<?= $patientInfo[0]["password"] ?>" placeholder="password" name="password" disabled>



                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Phone Number</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" placeholder="eg. 0949289781" value="<?= $patientInfo[0]["phone_no"] ?>" name="phone_no" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Email Address</label>
                        <div class="col-md-12">
                            <input type="email" class="form-control adminContactInput" placeholder="john@gmail.com" value="<?= $patientInfo[0]["email_address"] ?>" name="email_address" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Completed Age</label>
                        <div class="col-md-12">
                            <input type="number" min="1" class="form-control adminContactInput" placeholder="your Age(Completed age)" value="<?= $patientInfo[0]["age"] ?>" name="age" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="userProfileLabel col-md-5">Address</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control adminContactInput" placeholder="eg. Kamaryut Tsp., Yangon" value="<?= $patientInfo[0]["address"] ?>" name="address" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="userProfileLabel col-md-5">Gender-
                            <span class="text-dark">
                                <?php if ($patientInfo[0]["gender"] == 2) {
                                    echo "Other";
                                } else if ($patientInfo[0]["gender"] == 0) {
                                    echo "Male";
                                } else if ($patientInfo[0]["gender"] == 1) {
                                    echo "Female";
                                } else if ($patientInfo[0]["gender"] == "") {
                                    echo "Not Set";
                                }
                                ?>
                            </span></label>
                    </div>
                    <input type="hidden" name="id" value="<?= $patientInfo[0]["id"] ?>">
                </form>
            </div>

        </div>
    </div>
    <!-- Footer -->
    <?php include("./common/footer.php"); ?>

</body>

</html>