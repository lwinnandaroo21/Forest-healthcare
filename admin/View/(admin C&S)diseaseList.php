<?php
include "../Controller/C&SDiseaseListController.php";
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
    <link rel="stylesheet" href="./resources/css/AdminDoctorList.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/adminContact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="./resources/css/root.css">
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="./resources/css/diseaseList.css">
</head>

<body class="skin-blue">

    <!-- Header -->
    <?php include("common/header.php"); ?>
    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">Conditions & Services</span>
            <p class="content-header-text2"><small>List of Conditions</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="testDahboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a href="(admin C&S)addDisease.php">Condition&Service</a></li>
        </ol>
    </section>

    <!-- <div class="diseaseListTitle m-sm-auto mt-sm-3 mb-sm-3 mb-md-3 mb-3">
            Admin >> Post >> Conditions & Services
        </div>
        <div class="diseaseListTitle m-sm-auto mt-sm-3 mb-sm-3 mb-md-3 mb-3">
            List of Conditions
        </div> -->
    <div class="container">
        <div class="row">
            <div class="col-md-1 col-sm-1 "></div>
            <div class="col-md-9 col-sm-10 table-responsive">
                <table class="table mt-3">
                    <thead>
                        <tr class="title">
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Photo</th>
                            <th scope="col">Content</th>
                            <th scope="col">Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        <?php foreach ($diseaseInfo as $key => $disease) { ?>
                            <tr>
                                <td scope="row"><?= $count++; ?>.</td>
                                <td><?= $disease["disease_title"] ?> </td>
                                <td>
                                    <img src="./image/C&S/<?= $disease["cs_photo"] ?>" alt="" class="csImage">
                                </td>
                                <td><?= substr($disease["disease_detail"], 0, 15) ?>...</td>
                                <td>
                                    <span>
                                        <a href="../Controller/C&SEditController.php?id=<?= $disease["id"] ?>"><i class="fa-solid fa-pen-to-square editBtn"></i></a>
                                    </span>
                                    <span>
                                        <a href="../Controller/C&SDeleteController.php?id=<?= $disease["id"] ?>"><i class="fa-solid fa-trash-can trashBtn"></i></a>
                                    </span>
                                </td>
                            </tr>
                        <?php  } ?>
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="row">
                <div class="col-md-5 col-sm-2"></div>
                <div class="col-md-6 col-sm-6">
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
                                <a href="?page=<?= $page+1 ?>">&raquo;</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?php include("common/footer.php"); ?>


</body>

</html>