<?php
include "../Controller/webisteAboutUsController.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <!-- css -->
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/aboutUs.css">
    <link rel="stylesheet" href="./resources/css/all.css" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- for icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>
    <div class="container-fluid aboutUs">
        <div class="row ">
            <!-- <div class="col-lg-1 col-md-1 col-sm-1"></div> -->
            <div class="col-lg-5 col-md-5 col-sm-5 mt-5 textAboutUs">
                <?php foreach ($aboutUs as $aboutUs) { ?>
                    <p class="text-white mt-5 aboutUstitle"><?= $aboutUs["title"] ?></p>
                    <p class="description text-white"><?= $aboutUs["description"] ?></p>
                <?php } ?>
                <!-- <button class="larnmorebtn text-white">Learn More</button> -->
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <img src="./storages/tt.png" class="mt-5 aboutUsImage" alt="About Us img" srcset="">
            </div>

        </div>

    </div>

    <!-- Footer -->
    <?php include("./common/footer.php"); ?>
</body>

</html>