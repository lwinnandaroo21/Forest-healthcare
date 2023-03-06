

function modal(status,id) {
    if (status == 0) {
        Swal.fire({
            title: 'Choose Your Decision!',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Approved',
            denyButtonText: 'Reject',
            backdrop : false,
        }).then((result) => {
            let status = 0;
            if (result.isConfirmed) 
                status = 1;
            else if (result.isDenied) 
                status = 2;
            
            let sendData = {
                status: status,
                bookingID : id
            }
            
            $.ajax({
                url: "../Controller/hospitalAppointmentStatusUpdateController.php",
                type: "POST",
                data: sendData,
                success: function (res) {
                    if(res == 1)
                    location.reload();
                },
                error: function (err) {
                    console.log(err);
                }
            })
            
        })
    }
}