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

    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="./resources/css/Admin.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="skin-blue">

    <!-- Header -->
    <?php include("common/header.php"); ?>



    <div class="container">
        <div class="row">
            <p></p>
            <p></p>
            <!-- <div class="col-md-2 col-sm-2 "></div> -->
            <div class="col-md-8 col-sm-10 mx-auto  table-responsive">
                <table class="table">
                    <thead class="adminPPlistheaderbg">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Question</th>
                            <th scope="col">Answer</th>
                            <th scope="col">Active</th>
                            <th scope="col">Question</th>
                            <th scope="col">Answer</th>
                            <th scope="col">Active</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Question</td>
                            <td class="nandar"><?php echo substr("Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis corporis aspernatur, nostrum facere voluptas exercitationem illo, saepe libero sit maxime repellendus illum! Possimus reprehenderit similique quae ipsa assumenda, nostrum aliquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat eum beatae fugit. Possimus consectetur saepe earum! Eos iusto numquam error commodi minima, exercitationem voluptatem, animi sapiente mollitia, sint odit ab?", 0, 50) ?>... </td>
                            <td>
                                <button class="btn"><i class="fa-solid fa-pen-to-square adminPPeditIcon"></i></button>
                                <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Question</td>
                            <td>Answer</td>
                            <td>
                                <button class="btn"><i class="fa-solid fa-pen-to-square adminPPeditIcon"></i></button>
                                <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Question</td>
                            <td>Answer</td>
                            <td>
                                <button class="btn"><i class="fa-solid fa-pen-to-square adminPPeditIcon"></i></button>
                                <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Question</td>
                            <td>Answer</td>
                            <td>
                                <button class="btn"><i class="fa-solid fa-pen-to-square adminPPeditIcon"></i></button>
                                <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Question</td>
                            <td>Answer</td>
                            <td>
                                <button class="btn"><i class="fa-solid fa-pen-to-square adminPPeditIcon"></i></button>
                                <button class="btn"><i class="fa-solid fa-trash-can adminPPdeleteIcon"></i></button>
                            </td>
                        </tr>


                    </tbody>
                </table>
            </div>

        </div>

        <div class="row">
            <div class="col-md-10 col-sm-5"></div>
            <div class="col-md-2 col-sm-5">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>




        <!-- Footer -->
        <?php include("common/footer.php"); ?>

        <script src="./resources/js/adminAboutUs.js"></script>

</body>

</html>



<!-- me -->
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home.css" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <style>
        .adminav1 {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            justify-content: flex-start;
        }

        .adminheader1 {
            background-color: #188067;
        }

        .menubody {
            width: 277px;
            height: 1025px;
            background-color: black;
        }

        .logoadmin {
            position: absolute;
            width: 276px;
            height: 76px;
            left: -1px;
            top: -2px;
            background: #19332E;
        }

        .adminNav1 {
            background-color: #188067;
            height: 70px;
        }

        .nav1 {
            position: absolute;
            right: 35px;
            top: 15px;
        }

        .hamburger {
            font-size: 30px;
            color: white;
        }

        .AdminDoctorTable {
            position: absolute;
            width: 860px;
            height: 400px;
            left: 477px;
            top: 200px;
        }

        .AdminDoctorTableTitle {
            background: #188067;
            color: white;
        }

        .btnview {
            width: 88px;
            height: 36px;
            background: #188067;
            border-radius: 12px;
            border: none;
            border-bottom: 1px solid #161817;
            color: white;
        }
    </style>
</head>

<body>


    <div class="row">
        <div class="col-md-10 col-sm-5"></div>
        <div class="col-md-2 col-sm-5">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>



</body>

</html>