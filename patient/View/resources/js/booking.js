
chooseHospital();
$("#hospitalChoose").change(function () {

    chooseHospital();
});

function chooseHospital() {
    let sendData = {
        hospital: $("#hospitalChoose").find(":selected").val(),
    };

    $.ajax({
        url: "../Controller/hospitalChooseController.php",
        type: "POST",
        data: sendData,

        success: function (res) {
            let doctors = JSON.parse(res);
            console.log(doctors);

            $("#cardResult").empty();

            for (const doctor of doctors) {

                $("#cardResult").append(
                    `
            <div class="card m-3  d-flex justify-content-evenly p-2 carddesign" >
                <div class="row g-3 ">
                    <div class="col-md-2">
                        <img src="./storages/doctor/${doctor.doctor_photo}" width="100px" class="img-fluid rounded-start " alt="...">
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <h5 class="card-title">${doctor.name}</h5>
                            <span class="card-title">${doctor.depname} Department</span>
                            <div class="card-title"> ${doctor.dr_expert_in} </div>              
                            <span class="card-title">(${doctor.duty_day})</span>
                            <span class="card-title">${doctor.duty_start_time} to </span>
                            <span class="card-title">${doctor.duty_end_time}</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card-body " style="color: #188067">
                            <p class="card-title">${doctor.dr_degree}</p>
                        </div>
                    </div>
            
                    <div class="col-md-2">
                        <a href="../Controller/doctorlistC.php?doctorID=${doctor.id}" class="btn btn-warning p-2 text-white mt-4 " style="width: 130px">
                        <img src="booking.png" alt="">Book</a>
                    </div>
                </div>
            </div>
                    `
                );
            };
        },
        error: function (err) {
            alert(err);
        },
    });
}