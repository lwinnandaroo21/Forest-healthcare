<?php

session_start();
$doctorInfos = $_SESSION["doctorInfos"];
$patientInfo = $_SESSION["patientInfo"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./resources/css/bookingForm.css">
</head>

<body>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
        data-bs-whatever="@mdo">Book</button> -->


    <!-- <div class="modal fade modal-dialog .modal-dialog-scrollable modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true"> -->
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content ">
            <div class="modal-header mt-3 mb-3 mt-md-3 mb-md-3 mt-sm-3 mb-sm-3">
                <h1 class="modal-title mx-auto " id="exampleModalLabel">Appointment Request</h1>

            </div>
            <h6 class="modal-dialog ms-5 text-center text-left">Please fill in our online form and we will contact you within 2 working
                days, with the nearest available appointment slot.
            </h6>


            <div >
                <form action="../Controller/addBookingController.php" enctype="multipart/form-data" method="POST">
                    <div class="row mx-auto mt-5">
                        <div class="col-12  col-sm-12 col-md-7 mx-auto mx-sm-auto mx-md-auto">
                            <div class="row ">
                                <div class="col-md-6 mb-3 col-sm-12">
                                    <label for="recipient-name" class="col-form-label"></label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="Name" value="<?= $patientInfo[0]["name"] ?>" required readonly name="name">
                                </div>
                                <div class="col-md-6 mb-3 col-sm-12">
                                    <label for="message-text" class="col-form-label"></label>
                                    <input type="text" class="form-control" id="recipient-name" placeholder="Phone No." value="<?= $patientInfo[0]["phone_no"] ?>" required readonly name="phone">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <span class="form-floating">
                                    <label for="birthday"></label>
                                    <input type="text" id="birthday" class="form-control" placeholder="Age" value="<?= $patientInfo[0]["age"] ?>" name="birthday">
                                    <input type="hidden" id="birthday" class="col-md-12 mb-3 col-sm-12 col-12 " value="<?= $doctorInfos[0]["id"] ?>" name="id">
                                    <label for="floatingTextarea">Age</label>
                                </span>
                            </div>

                            <div class="row mt-3 mt-sm-3 mt-md-3 ">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="recipient-name" placeholder="Address" value="<?= $patientInfo[0]["address"] ?>" required readonly name="address">
                                    <label for="floatingTextarea">Address</label>
                                </div>
                            </div>

                            <div class="row mt-3 mt-sm-3 mt-md-3">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Brief description of your symptoms" id="floatingTextarea" name="description"></textarea>
                                    <label for="floatingTextarea">Brief description of your symptoms
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 mt-4 ms-sm-5 ms-sm-5 ms-md-5 d-flex justify-content-center">
                            <div class="card text-center p-2" style="width: 18rem;">
                                <div class="card-body">
                                    <h5 class="card-title booking-summary">Booking Summary</h5>
                                    <img src="./storages/doctor/<?= $doctorInfos[0]["doctor_photo"] ?>" alt="" width="100px">
                                    <p class="card-text"><b><?= $doctorInfos[0]["name"] ?></b></p>
                                    <p class="card-text"><b><?= $doctorInfos[0]["depname"] ?> Department</b></p>
                                    <div class="text-start">
                                        <div class="date"><b>Date </b><?= $doctorInfos[0]["duty_day"] ?></div>
                                        <div class="time"><b>Time</b> <?= $doctorInfos[0]["duty_start_time"] ?> <span>to <?= $doctorInfos[0]["duty_end_time"] ?></span></div>
                                        <div class="place"><b>Place</b> <?= $doctorInfos[0]["hosname"] ?> Hospital</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class=" form-check m-3 ms-3 ms-sm-3">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                I have read and accept <a href="#"><u>the terms and conditions.</u></a>
                            </label>
                        </div> -->
                        <div class="col-12 col-sm-12 col-md-4 mt-4 ms-sm-5 ms-md-5 ms-5  d-flex justify-content-center">
                            <button class=" btnBook text-white mb-3" name="bookingBtn" type="submit">Submit</button>
                            <a class="btnCancel ms-5 text-white mb-3" href="./doctorList.php" role="button" type="submit">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


</body>

</html>