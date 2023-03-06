<?php
include "../Controller/C&SDiseaseController.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition and service list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poly&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/root.css" />
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/all.css" />
    <link rel="stylesheet" href="./resources/css/C&S.css">
    <link rel="stylesheet" href="./resources/css/C&Scolor.css">

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
    <!-- <div class="container"> -->
    <div>
        <h3 class="CStitle">Conditions and Services</h3>
    </div>
    <div class="box">
        <div class="browse">
            <h4 class="CSbrowseA_Z">Browse A-Z</h4>
        </div>
        <ul class="list-inline">
            <li>
                <a href="#A" class="alpha">A</a>
            </li>
            <li>
                <a href="#B" class="alpha">B</a>
            </li>
            <li>
                <a href="#C" class="alpha">C</a>
            </li>
            <li>
                <a href="#D" class="alpha">D</a>
            </li>
            <li>
                <a href="#E" class="alpha">E</a>
            </li>
            <li>
                <a href="#F" class="alpha">F</a>
            </li>
            <li>
                <a href="#G" class="alpha">G</a>
            </li>
            <li>
                <a href="#H" class="alpha">H</a>
            </li>
            <li>
                <a href="#I" class="alpha">I</a>
            </li>
            <li>
                <a href="#J" class="alpha">J</a>
            </li>
            <li>
                <a href="#K" class="alpha">K</a>
            </li>
            <li>
                <a href="#L" class="alpha">L</a>
            </li>
            <li>
                <a href="#M" class="alpha">M</a>
            </li>
            <li>
                <a href="#N" class="alpha">N</a>
            </li>
            <li>
                <a href="#O" class="alpha">O</a>
            </li>
            <li>
                <a href="#P" class="alpha">P</a>
            </li>
            <li>
                <a href="#Q" class="alpha">Q</a>
            </li>
            <li>
                <a href="#R" class="alpha">R</a>
            </li>
            <li>
                <a href="#S" class="alpha">S</a>
            </li>
            <li>
                <a href="#T" class="alpha">T</a>
            </li>
            <li>
                <a href="#U" class="alpha">U</a>
            </li>
            <li>
                <a href="#V" class="alpha">V</a>
            </li>
            <li>
                <a href="#W" class="alpha">W</a>
            </li>
            <li>
                <a href="#X" class="alpha">X</a>
            </li>
            <li>
                <a href="#Y" class="alpha">Y</a>
            </li>
            <li>
                <a href="#Z" class="alpha">Z</a>
            </li>
        </ul>
    </div>
    <div class="diseaseList">
        <div class="list">
            <span id="A">A</span>
            <div class="listDetail">
                <ul class="diseaseli">

                    <?php foreach ($diseaseInfoA as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>


                    <!-- <li>
                        <a href="">Abdominal Aortic Aneurysm</a>
                    </li>
                    <li>
                        <a href="">Abdominal Aortic Aneurysm</a>
                    </li>
                    <li>
                        <a href="">Abdominal Aortic Aneurysm</a>
                    </li>
                    <li>
                        <a href="">Abdominal Aortic Aneurysm</a>
                    </li>
                    <li>
                        <a href="">Abdominal Aortic Aneurysm</a>
                    </li>
                    <li>
                        <a href="">Abdominal Aortic Aneurysm</a>
                    </li>
                    <li>
                        <a href="">Abdominal Aortic Aneurysm</a>
                    </li> -->
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="B">B</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoB as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="C">C</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoC as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="D">D</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoD as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="E">E</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoE as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="F">F</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoF as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="G">G</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoG as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="H">H</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoH as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="I">I</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoI as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="J">J</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoJ as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="K">K</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoK as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="L">L</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoL as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="M">M</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoM as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="N">N</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoN as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="O">O</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoO as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="P">P</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoP as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="Q">Q</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoQ as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="R">R</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoR as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="S">S</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoS as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="T">T</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoT as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="U">U</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoU as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="V">V</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoV as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="W">W</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoW as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="X">X</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoX as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="Y">Y</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoY as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>
        <hr class="CShr">
        <div class="list">
            <span id="Z">Z</span>
            <div class="listDetail">
                <ul class="diseaseli">
                    <?php foreach ($diseaseInfoZ as $key => $disease) { ?>
                        <li>
                            <a href="../Controller/C&SDiseaseDetailController.php?id=<?=$disease['id']?>"><?= $disease["disease_title"] ?></a>
                        </li>
                    <?php  } ?>
                </ul>
            </div>
        </div>

    </div>
    <hr class="CShr">
    <!-- Footer -->
    <?php include("./common/footer.php"); ?>
</body>

</html>