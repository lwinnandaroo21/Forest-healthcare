<?php
include "../Controller/adminContactUsListController.php";
include "../Controller/dashboardNameController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/adminContactList.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/root.css">
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
</head>

<body class="skin-blue">
    <!-- Header -->
    <?php include("common/header.php"); ?>
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Mail</span>
            <p class="content-header-text2"><small>Mail Features</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="testDahboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Mail</li>
        </ol>
    </section>
    <!-- Header -->


    <div class="container">
        <div class="row">
            <!-- <div class="col-md-1 col-sm-3 col-2"></div> -->
            <?php foreach ($mailList as $mail) { ?>
                <div class="card adminContactListCardBg">
                    <div class="card-body cardBody">
                        <div class="row cardRow">
                            <div class="col-sm-8 contactListTitle">
                                <div class=""><?= $mail["username"] ?></div>
                                <div class=""><?= $mail["phone_no"] ?></div>
                                <div class=""><?= $mail["email_address"] ?></div>
                            </div>
                            <div class="col-sm-4">
                                <!-- <a href="./adminContactUsReply.php" ><button class="btn adminContactListbtn" name="replyBtn">Reply</button></a> -->
                                <a href="../Controller/adminContactUsReplyUpdateController.php?id=<?= $mail["id"]?>"><button class="btn adminContactListbtn" name="replyBtn">Reply</button></a>
                            </div>
                        </div>
                        
                        <p class="adminContactListCardText"><?= $mail["text_message"] ?></p>
                        
                        
                    </div>
                </div>
            <?php } ?>
            <!-- <div class="card adminContactListCardBg">
                <div class="card-body cardBody">
                    <div class="row mb-2 cardRow">
                        <div class="col-sm-8 contactListTitle">
                            <div class="">Aung Aung</div>
                            <div class="">aung@gmail.com</div>
                            <div class="">09-2150776</div>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn adminContactListbtn">Reply</a>
                        </div>
                    </div>
                    <p class="adminContactListCardText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quaerat earum dolor cumque, a ipsam modi iste veritatis assumenda harum totam, animi rerum omnis nam alias minus? A, cum sint.</p>
                </div>
            </div>
            <div class="card adminContactListCardBg">
                <div class="card-body cardBody">
                    <div class="row mb-2 cardRow">
                        <div class="col-sm-8 contactListTitle">
                            <div class="">Aung Aung</div>
                            <div class="">aung@gmail.com</div>
                            <div class="">09-2150776</div>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn adminContactListbtn">Reply</a>
                        </div>
                    </div>
                    <p class="adminContactListCardText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quaerat earum dolor cumque, a ipsam modi iste veritatis assumenda harum totam, animi rerum omnis nam alias minus? A, cum sint.</p>
                </div>
            </div>
            <div class="card adminContactListCardBg">
                <div class="card-body cardBody">
                    <div class="row mb-2 cardRow">
                        <div class="col-sm-8 contactListTitle">
                            <div class="">Aung Aung</div>
                            <div class="">aung@gmail.com</div>
                            <div class="">09-2150776</div>
                        </div>
                        <div class="col-sm-4">
                            <a href="#" class="btn adminContactListbtn">Reply</a>
                        </div>
                    </div>
                    <p class="adminContactListCardText">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate quaerat earum dolor cumque, a ipsam modi iste veritatis assumenda harum totam, animi rerum omnis nam alias minus? A, cum sint.</p>
                </div>
            </div> -->
            <!-- <div class="col-md-1 col-sm-1 col-1"></div> -->
        </div>

    </div>
    <!-- Footer -->
    <?php include("common/footer.php"); ?>
</body>

</html>