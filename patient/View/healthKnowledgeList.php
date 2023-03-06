<?php
include "../Controller/articleListC.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Knowledge List</title>
    <script src="./resources/js/jquery3.6.0.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css" />
    <!-- <link rel="stylesheet" href="./resources/css/C&S.css"> -->
    <link rel="stylesheet" href="./resources/css/all.css" />
    <link rel="stylesheet" href="./resources/css/health.css" />
    <!-- logouticon2 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/5053738b7f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/healthKnowList.css?v=" <?= time() ?>>
    <script src="./resources/js/articleSearch.js" defer></script>
</head>

<body>
    <!-- Header -->
    <?php include("./common/top.php"); ?>

    <!-- search box -->
    <div class="container-fluid hList">
        <div class="row mt-4 ms-5">
            <div class="col-12 col-md-12 col-sm-12 mx-sm-auto">
                <input type="text" placeholder="Search.." name="searchText" class="searchBox" id="searchBox">
                <button type="submit" id="btnSearch"><i class="fa fa-search"></i></button>
            </div>
        </div>

        <!-- article list -->
        <div id="searchResult">
        <div class="row d-flex justify-content-center" >
            <?php foreach ($articleList as $key => $article) { ?>
                <div class="card mt-3 col-md-10 col-sm-10 col-10 m-5">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-12">
                            <div class="card-body">
                                <strong for="" class="healthKtitle"><?= $article["title"] ?></strong>
                                <p class="articaldetail"><?php echo substr($article["description"], 0, 300) ?>...</p>
                                <a href="../Controller/articleDetailC.php?articleId=<?= $article["id"] ?>"><button class="btn-readmore">Read More> </button></a>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-4  mt-3">
                            <img src="./storages/HealthKnowl/<?= $article["photo"] ?>" class="rounded  articlePhoto" alt="DetailPhoto">
                        </div>
                        <input type="hidden" name="id" value="">
                    </div>
                </div>
            <?php } ?>
        </div>
        </div>
    </div>
        <br>

        <!-- Footer -->
        <?php include("./common/footer.php"); ?>
</body>

</html>