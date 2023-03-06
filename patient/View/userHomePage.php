<?php

include "../Controller/visitorController.php";
include "../Controller/homeController.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
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

  <link rel="stylesheet" href="./resources/css/userHomePage.css">
</head>

<body>
  <!-- Header Nav bar -->
  <?php include("./common/top.php"); ?>

  <!-- Body starts -->
  <div class="box">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./storages/HomePageP1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./storages/HomePageP1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./storages/corona.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev " type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <div class="healthArticle">
      <?php foreach ($articleList as $key => $article) { ?>
        <div class="card mb-3 me-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-8 col-sm-8 col-8">
              <div class="card-body">
                <strong><div class="card-title"><?= $article["title"] ?></div></strong>
                <p class="card-text"><?php echo substr($article["description"], 0, 200) ?>... </p>
                <a href="../Controller/articleDetailC.php?articleId=<?= $article["id"] ?>"><button class="btn-readmore">Read More>>></button></a>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-4">
              <img src="./storages/HealthKnowl/<?= $article["photo"] ?>" class="img-fluid rounded-start" alt="...">
            </div>
          </div>
        </div>
      <?php } ?>
    </div>

    <div class="homeText mt-5 mb-3 text-center">
      <div class="bouncing-text fw-bolder fs-2 d-flex mx-auto">
        <div class="m">M</div>
        <div class="i">I</div>
        <div class="n">N</div>
        <div class="d">D</div>
        <div class="f">F</div>
        <div class="u">U</div>
        <div class="l">L</div>
        <div class="m m2">M</div>
        <div class="o">O</div>
        <div class="m m3">M</div>
        <div class="e">E</div>
        <div class="n n2">N</div>
        <div class="t">T</div>
        <div class="s">S</div>
        <div class="shadow"></div>
        <div class="shadow-two"></div>
      </div>

      <div>“The heart of meditation is taking ourselves a little
        less seriously.”</div>
    </div>

    <div class="mentalHealthArticle">
      <div class="article">
        <div class="hovereffect">
          <a class="articleImg" href=""><img src="./storages/Mental_Health1.png" alt=""></a>
          <div class="overlay">
            <a class="info" href="./mentalHealthList.php">Click to listen</a>
          </div>
        </div>
        <a href="" class="articleTitle">ANXIETY</a>
        <a href="" class="description">“No need to hurry. No need to sparkle. No need to be anybody but oneself.”</a>
      </div>

      <div class="article">
        <div class="hovereffect">
          <a class="articleImg" href=""><img src="./storages/Mental_Health2.png" alt=""></a>
          <div class="overlay">
            <a class="info" href="./mentalHealthList.php">Click to listen</a>
          </div>
        </div>
        <a href="" class="articleTitle">SElF-LOVE</a>
        <a href="" class="description">“Unconditional self love is all the really matters in life. It’s where real life
          begins.”</a>
      </div>

      <div class="article">
        <div class="hovereffect">
          <a class="articleImg" href=""><img src="./storages/Mental_Health3.png" alt=""></a>
          <div class="overlay">
            <a class="info" href="./mentalHealthList.php">Click to listen</a>
          </div>
        </div>
        <a href="" class="articleTitle">HEALING</a>
        <a href="" class="description">“Healing requires from us to stop struggling, but to enjoy life more and endure it
          less.”</a>
      </div>
    </div>
  </div>
  <?php include("./common/footer.php"); ?>

</body>

</html>