<?php
include "../Controller/departmentListController.php";
// include "../Controller/dashboardNameController.php";
session_start();
$doctorInfo =  $_SESSION["doctorInfo"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Edit Form</title>
    <link rel="stylesheet" href="./resources/css/editDoctor.css?= time() ?>">
    <!-- Bootstrap -->
    <link href="./resources/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <script src="./bootstrap-5.0.2-dist/js/bootstrap.bundle.js"></script>
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body class="editDoctorBody">
    <div class="container">
        <div class="row">
            <div class="col-2 col-md-2 col-sm-2"></div>
            <div class="col-6 col-md-6  col-sm-6">
                <h3 class="doctorEditText">Doctor Edit</h3>
                <form action="../Controller/updateDoctorController.php" class="form-horizontal" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <div class="col-md-12 departmentDropdown">
                            <label for="">Choose Department</label>
                            <select class="form-select" aria-label="Default select example" name="department">
                                <?php foreach ($departmentList as $key => $department) { ?>
                                    <option value="<?= $department["id"] ?>" <?php if ($department["id"] == $doctorInfo[0]["department_id"]) {
                                                                                    echo "selected";
                                                                                } ?>><?= $department["name"] ?></option>
                                <?php } ?>
                                <!-- <option selected>Department</option>
                                <option value="1">Neurology</option>
                                <option value="2">Neurology</option>
                                <option value="3">Neurology</option> -->
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" value="<?= $doctorInfo[0]["duty_day"] ?>" class="form-control" id="date" placeholder="Duty Day" name="day">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            Start Time<input type="time" value="<?= $doctorInfo[0]["duty_start_time"] ?>" class="form-control" id="startTime" name="startTime">
                            End Time <input type="time" value="<?= $doctorInfo[0]["duty_end_time"] ?>" class="form-control" id="endTime" name="endTime">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="email" value="<?= $doctorInfo[0]["email_address"] ?>" class="form-control" id="Email" placeholder="Email" name="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" value="<?= $doctorInfo[0]["phone_no"] ?>" class="form-control" id="phNo" placeholder="Ph No" name="phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <textarea type="text" rows="3" class="form-control" id="address" placeholder="Address" name="address"><?= $doctorInfo[0]["address"] ?> </textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="hidden" value="<?= $doctorInfo[0]["id"] ?>" class="form-control" id="id" placeholder="id" name="id">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row editdoctor justify-content-center align-item-center">
                            <div class="col-6 col-md-7 col-sm5"></div>
                            <span class="col-2 col-md-2 col-sm2">
                                <a href="./hospitalDoctorList.php" class="cancleBtn"><button class="btnEditD" name="">Cancel</button></a>
                            </span>
                            <span class="col-3 col-md-3 col-sm-3">
                                <button class="btnEditD" name="updateDoctor" type="submit">Edit Doctor</button>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-2 col-md-2 col-sm-2"></div>
        </div>
        <br>
        <p></p>
    </div>

</body>

</html>