<?php
session_start();

unset($_SESSION["email_address"]);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Signup</title>
    <link rel="stylesheet" href="./resources/css/signupLogin.css?v=<?= time() ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="small container-fluid">
    <div class=" mt-5 p-0">
        <div class="row  g-0 ">
            <div class="col-12 col-md-8">
                <div class="row">
                    <div class="login_logo me-3">
                        <img src="./storages/loginLogo.png" alt="" srcset="" class="loginLogo">
                        <label for="" class="mx-3"><a href="./userHomePage.php" class="acolor">Home</a></label>
                        <label for="" class="mx-3"><a href="./aboutUs.php" class="acolor">About Us</a></label>
                        <label for="" class=""><a href="./contactUs.php" class="acolor">Contact Us</a></label>
                    </div>
                </div>

                <div class="row  g-0 mt-5">
                    <div class="col-0 col-md-2 "></div>
                    <div class="col-md-8 col-sm-8">
                        <div class="simple-login-container text-center">
                            <form action="../Controller/registerController.php" method="post">
                                <div class="row  g-0 ms-3 mb-3 ">

                                    <div class="col-md-1 col-sm-1"></div>
                                    <div class="col-6 col-md-5 col-sm-5 ">
                                        <div class="dbtnlogin"><a href="./userLogin.php">Login</a></div>
                                    </div>
                                    <div class="col-6 col-md-6 col-sm-5 mb-4">
                                        <button class="btnsignup">Sign Up</button>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 mb-4 mx-2 ">
                                    <input type="text" class="form-control" placeholder="Username" name="username" required>
                                </div>
                                <div class="col-md-12 col-sm-12 mb-4 mx-2 ">
                                    <input type="text" class="form-control" placeholder="Email Address" name="email_address" required>
                                </div>
                                <div class="col-md-12 col-sm-12 mb-4 mx-2">
                                    <input type="password" placeholder="Password" class="form-control" name="password" required>
                                </div>
                                <div class="row ">
                                    <div class="col-0 col-md-1 col-sm-1"></div>
                                    <div class="col-5 col-md-5 col-sm-5">

                                    </div>

                                    <div class="col-5 col-md-5 col-sm-5 ms-3">
                                        <button class="btnsignup" type="submit">Signup</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- <div class="col-0 col-md-2 "></div> -->
                </div>
            </div>
            <div class="col-0 col-md-4  login_image text-end">
                <img class="loginimg" src="./storages/loginPhoto.png" alt="Login Photo" srcset="">
            </div>


        </div>
    </div>
    <!-- <div class="login_image col-md-6 col-sm-6 w-50%">
        <img class="loginimg" src="./images/loginPhoto.png" alt="Login Photo" srcset="">
    </div> -->
</body>

</html>