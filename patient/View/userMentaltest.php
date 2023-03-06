<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./resources/css/root.css" />
    <link rel="stylesheet" href="./resources/css/all.css" />
    <link rel="stylesheet" href="./resources/css/userMentalTest.css?v=<?= time() ?>" />
    <script type="text/javascript" src="./resources/js/userMentalTest.js" defer></script>
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
    <!-- <img src="./storages/mentalTestBg.png"/> -->
    <div class="container-fluid bgimage">
        <!-- <div class="col-1"></div> -->
        <div class="row quizBox justify-content-center align-item-center">

            <div class="quiz col-lg-5 col-md-5 col-sm-5" id="quiz">
                <div class="box">
                    <div class=" mt-5 ms-5">
                        <p class="question"><b>1.Not being control or stop worrying.</b></p>
                        <label for="Never"><input type="radio" name="answer1" id="q1a1" value="Never" required>Never &nbsp;&nbsp;&nbsp;</label>
                        <label for="Sometimes"><input type="radio" name="answer1" id="q1a2" value="Sometimes" required>Sometimes&nbsp;&nbsp;&nbsp;</label>
                        <label for="Often"><input type="radio" name="answer1" id="q1a3" value="Often" required>Often&nbsp;&nbsp;&nbsp;</label>
                        <label for="Very Often"><input type="radio" name="answer1" id="q1a4" value="Very Often" required>Very Often</label>
                    </div>
                    <div class="mt-5 ms-5">
                        <p class="question"><b>2.Unable to control anxiety.</b></p>
                        <label for="Never"><input type="radio" name="answer2" id="q2a1" value="Never" required>Never&nbsp;&nbsp;&nbsp;</label>
                        <label for="Sometimes"><input type="radio" name="answer2" id="q2a2" value="Sometimes" required>Sometimes&nbsp;&nbsp;&nbsp;</label>
                        <label for="Often"><input type="radio" name="answer2" id="q2a3" value="Often" required>Often&nbsp;&nbsp;&nbsp;</label>
                        <label for="Very Often"><input type="radio" name="answer2" id="q2a4" value="Very Often" required>Very Often</label>
                    </div>
                    <div class="mt-5 ms-5">
                        <p class="question"><b>3.Trouble relaxing.</b></p>
                        <label for="Never"><input type="radio" name="answer3" id="q3a1" value="Never" required>Never&nbsp;&nbsp;&nbsp;</label>
                        <label for="Sometimes"><input type="radio" name="answer3" id="q3a2" value="Sometimes" required>Sometimes&nbsp;&nbsp;&nbsp;</label>
                        <label for="Often"><input type="radio" name="answer3" id="q3a3" value="Often" required>Often&nbsp;&nbsp;&nbsp;</label>
                        <label for="Very Often"><input type="radio" name="answer3" id="q3a4" value="Very Often" required>Very Often</label>
                    </div>
                    <div class="mt-5 ms-5">
                        <p class="question"><b>4.Worrying too much about different things.</b></p>
                        <label for="Never"><input type="radio" name="answer4" id="q4a1" value="Never" required>Never&nbsp;&nbsp;&nbsp;</label>
                        <label for="Sometimes"><input type="radio" name="answer4" id="q4a2" value="Sometimes" required>Sometimes&nbsp;&nbsp;&nbsp;</label>
                        <label for="Often"><input type="radio" name="answer4" id="q4a3" value="Often" required>Often&nbsp;&nbsp;&nbsp;</label>
                        <label for="Very Often"><input type="radio" name="answer4" id="q4a4" value="Very Often" required>Very Often</label>
                    </div>
                    <div class="mt-5 ms-5">
                        <p class="question"><b>5.Being so restless that it is hard to sit still.</b></p>
                        <label for="Never"><input type="radio" name="answer5" id="q5a1" value="Never" required>Never&nbsp;&nbsp;&nbsp;</label>
                        <label for="Sometimes"><input type="radio" name="answer5" id="q5a2" value="Sometimes" required>Sometimes&nbsp;&nbsp;&nbsp;</label>
                        <label for="Often"><input type="radio" name="answer5" id="q5a3" value="Often" required>Often&nbsp;&nbsp;&nbsp;</label>
                        <label for="Very Often"><input type="radio" name="answer5" id="q5a4" value="Very Often" required>Very Often</label>
                    </div>
                    <div class="mt-5 ms-5">
                        <p class="question"><b>6.Becoming easily annoyed or irritable.</b></p>
                        <label for="Never"><input type="radio" name="answer6" id="q6a1" value="Never" required>Never&nbsp;&nbsp;&nbsp;</label>
                        <label for="Sometimes"><input type="radio" name="answer6" id="q6a2" value="Sometimes" required>Sometimes&nbsp;&nbsp;&nbsp;</label>
                        <label for="Often"><input type="radio" name="answer6" id="q6a3" value="Often" required>Often&nbsp;&nbsp;&nbsp;</label>
                        <label for="Very Often"><input type="radio" name="answer6" id="q6a4" value="Very Often" required>Very Often</label>
                    </div>
                    <button class="ms-3 mt-4" id="submit" onclick="submit()">Submit</button>
                </div>
            </div>
            <div id="result" class=" col-lg-4 col-md-4 col-sm-4  ">
                <div class="box">
                    <div class=" mt-5 ms-3 text1">Mental health includes our emotional, psychological, and social well-being. It affects how we think, feel, and act. It also helps determine how we handle stress, relate to others, and make healthy choices.</div>
                    <div class="mt-5 ms-3 text2">Take your mentl health test and see the result.</div>
                    <h5 class="mt-4 ms-3">Your Results</h5>
                    <h3 class="mt-4 ms-3" id="resultCondition">....</h3>
                    <div class="mt-3 ms-3" id="resultConditionAnswer"></div>
                    <button class="me-0 mt-5 mb-1" id="restart" onclick="restart()">Restart</button>
                </div>
            </div>

        </div>

    </div>


    <!-- Footer -->
    <?php include("./common/footer.php"); ?>

</body>

</html>