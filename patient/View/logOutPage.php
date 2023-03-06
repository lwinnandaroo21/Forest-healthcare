<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

        <style>
            .modal-footer button{
                box-shadow: 0px 4px 5px gray;
                font-weight: 700;
            }
            .btnLogOut{
                background-color: #188067;
                color: white;
                text-decoration: none;
            }
        </style>
</head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Log Out
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center align-items-center flex-column">
                    <div class="photo mx-auto ">
                        <img src="./storages/LogOut-logo.png" alt="" width="160px">
                    </div>
                    <div class="fw-bold fs-3 mt-3">Log Out?</div>
                    <div>Are you sure to leave?</div>
                </div>
                <div class="modal-footer mx-auto">
                    <button type="button" class="btn btn-danger btnCancel me-3" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btnLogOut" style="text-decoration: none; color:white;">Log Out</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>