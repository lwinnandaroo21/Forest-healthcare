<?php
include "../Controller/adminUserListController.php";
include "../Controller/dashboardNameController.php";

// echo "<pre>";
// print_r($doctorList);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin User List</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="./resources/css/adminContact.css?v=" <?= time() ?>>
    <link rel="stylesheet" href="./resources/css/root.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>

    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
    <link href="./resources/css/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="./resources/css/adminTableStyle.css">
</head>

<body class="skin-blue">
    <!-- Header -->
    <?php include("common/header.php"); ?>

    <section class="content-header">
        <i class="fa fa-dashboard icon"></i>
        <span>
            <span class="content-header-text1">User</span>
            <p class="content-header-text2"><small>User List Features</small></p>
        </span>
        <ol class="breadcrumb">
            <li><a href="testDahboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">User List</li>
        </ol>
    </section>
        <!-- Header -->
    <div class="container">
        <br>

        <div class="row">
            <!-- <?php
                    echo $totalRecord;
                    echo $totalPages;
                    ?> -->
            <div class="col-md-1 col-sm-1 col-2"></div>
            <div class="col-md-8 col-sm-10 mx-auto table-responsive">

                <table class="table">
                    <thead class="doctorTable">
                        <thead>
                            <tr class="title">
                                <th scope="col">No</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Phone No</th>
                                <th scope="col">Email</th>
                                <th scope="col">Address</th>
                                <th scope="col">Photo</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php $count = 1; ?>
                        <?php foreach ($userList as $key => $user) { ?>
                            <tr>
                                <td scope="row"><?= $count++; ?></td>
                                <td><?= $user["name"] ?></td>
                                <td><?= $user["email_address"] ?></td>
                                <td><?= $user["phone_no"] ?></td>
                                <td><?= $user["address"] ?></td>
                                <td>
                                    <img src="./image/userProfile/<?php echo $user["photo"] ?>" alt="photo">
                                </td>
                            </tr>
                        <?php } ?>



                        <!-- 
                    <tr>
                        <td>Nandar</td>
                        <td>09-34354343</td>
                        <td>nandar@gmail.com</td>
                        <td>Yangon</td>
                    </tr>
                    <tr>
                        <td>Nandar</td>
                        <td>09-34354343</td>
                        <td>nandar@gmail.com</td>
                        <td>Yangon</td>
                    </tr>
                    <tr>
                        <td>Nandar</td>
                        <td>09-34354343</td>
                        <td>nandar@gmail.com</td>
                        <td>Yangon</td>
                    </tr>
                    <tr>
                        <td>Nandar</td>
                        <td>09-34354343</td>
                        <td>nandar@gmail.com</td>
                        <td>Yangon</td>
                    </tr>
                    <tr>
                        <td>Nandar</td>
                        <td>09-34354343</td>
                        <td>nandar@gmail.com</td>
                        <td>Yangon</td>
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