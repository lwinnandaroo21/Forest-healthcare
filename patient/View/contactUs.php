<?php

include "../Controller/webisteContactInfoController.php"


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/C&S.css">
    <link rel="stylesheet" href="./resources/css/all.css" />
    <link rel="stylesheet" href="./resources/css/contact.css"/>
    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
</head>

<body >
    <?php include("./common/top.php"); ?>

    <div id="page-container" class="bodyColor">
        <div id="content-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-11" id="rowBody">
                        <div class="Contact text-light">Contact Us</div>
                        <form action="../Controller/contactUsController.php" method="post"> 
                            <div>
                                <input type="text" class="col-10 contactboxStyle" name="username" placeholder="User Name" required>
                            </div>
                            <div>
                                <input type="text" class="col-10 mt-3 contactboxStyle" name="email" placeholder="Email Address" required>
                            </div>
                            <div>
                                <input type="text" class="col-10 mt-3 contactboxStyle" name="phNo" placeholder="Phone Number" required>
                            </div>
                            <div>
                                <textarea rows="5" class="col-10 mt-3 contactboxStyle" name="textMessage" placeholder="Message" required></textarea>
                            </div>
                            <button class="btn btn-warning col-10 boxStyle contactsendButton" name="sendMail" type="submit">Send</button>
                            <!-- <div class="btn btn-warning col-10 boxStyle contactsendButton">Send</div> -->
                        </form>
                    </div>
                    <div class="col-1">
                        <div class="verticalLine"></div>
                    </div>
                    <div class="col-4 information rowBody">
                        <?php foreach ($contactUs as $contactUs) { ?>
                            <div class="text-light infoTitle"><?= $contactUs["title"] ?></div>
                            <div class="mt-3 text-light col-12"><?= $contactUs["welcome_text"] ?></div>
                            <div class="mt-3">
                                <i class="fa-solid fa-location-dot iconColor"></i>
                                <span class="text-light">Address</span>
                                <div class="infoDetail"><?= $contactUs["address"] ?></div>
                            </div>
                            <div>
                                <i class="fa-solid fa-phone iconColor mt-3"></i>
                                <span class="text-light">Lets Talk</span>
                                <div class="infoDetail"><?= $contactUs["phone_no"] ?></div>
                            </div>
                            <div>
                                <i class="fa-solid fa-envelope iconColor mt-3"></i>
                                <span class="mb-5 text-light">General Support</span>
                                <div class="infoDetail"><?= $contactUs["email_address"] ?></div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>



        <!-- <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-11 offset-1">
                <div class="Contact text-light">Contact Us</div>
                <div>
                    <input type="text" class="col-10 contactboxStyle" placeholder="User Name">
                </div>
                <div>
                    <input type="text" class="col-10 mt-3 contactboxStyle" placeholder="Email Address">
                </div>
                <div>
                    <input type="text" class="col-10 mt-3 contactboxStyle" placeholder="Phone Number">
                </div>
                <div>
                    <textarea rows="5" class="col-10 mt-3 contactboxStyle" placeholder="Message"></textarea>
                </div>

                <div class="btn btn-warning col-10 boxStyle contactsendButton">Send</div>

            </div>
            <div class="col-1">
                <div class="verticalLine"></div>
            </div>
            <div class="col-4 information">
                <div class="text-light infoTitle">INFORMATION</div>
                <div class="mt-3 text-light col-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias voluptatum pariatur.</div>
                <div class="mt-3">
                    <i class="fa-solid fa-location-dot iconColor"></i>
                    <span class="text-light">Address</span>
                    <div class="infoDetail">Junction Square 3rd floor, Yangon</div>
                </div>
                <div>
                    <i class="fa-solid fa-phone iconColor mt-3"></i>
                    <span class="text-light">Lets Talk</span>
                    <div class="infoDetail">01-253920116</div>
                </div>
                <div>
                    <i class="fa-solid fa-envelope iconColor mt-3"></i>
                    <span class="mb-5 text-light">General Support</span>
                    <div class="infoDetail">forest@gmail.com</div>
                </div>

            </div>
        </div>
    </div> -->



    </div>
    <!-- Footer -->
    <?php include("./common/footer.php"); ?>
</body>

</html>