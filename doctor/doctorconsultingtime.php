<?php
session_start();
if (!isset($_SESSION['doctorname']) && !isset($_SESSION['doctorid'])) {
    header('location:Doctorlogin.php');
}


?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="customcss/doctor.css">
        <title>Admin home page</title>
        <style>
            #content {
                width: 100%;
                height: auto;
                overflow: hidden;
                position: relative;
                background-image: url('../picture/image15.jpg');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                text-align: center;
                justify-content: center;
            }

            #modal {
                background: rgba(0, 0, 0, 0.7);
                position: fixed;
                /* margin-left: 360px; */
                top: -10px;
                width: 100%;
                height: 100%;
                z-index: 100;
                display: none;

            }

            #close-btn {
                background: red;
                color: white;
                width: 30px;
                height: 30px;
                line-height: 30px;
                text-align: center;
                border-radius: 50px;
                position: absolute;
                top: 100px;
                right: 350px;
                cursor: pointer;

            }
        </style>


    </head>

    <body>
        <?php
        include('commonpage/header.php');
        ?>
        <div class="container-fluid" id="content">



            <!-- start consulting day and time  -->
            <div id="modal1">
                <div class="mb-3 text-center border border-2 border-dark my-5"
                    style="width:800px;margin:auto;height:700px;background-color:lightgreen;margin-top:10px;">
                    <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
                        Consulting Day And Time:-
                    </div><br><br><br>
                    <div class="col-sm-10 mx-auto">
                        <input type="text" class="form-control border border-2 border-success" name="" id="doctor"
                            value="<?php echo $_SESSION['doctorname'] ?>">

                    </div><br><br>
                    <div class="d-grid gap-2 d-md-block mx-auto">
                        <button class="btn btn-primary" type="submit" id="change_btn">Change Time</button>&nbsp;
                        <button class="btn btn-primary" type="reset" id="reset_btn">Reset</button>
                    </div><br><br>

                    <div id="modal-form">
                        <table width="100%" padding="40px">
                        </table><br>

                    </div>
                </div>
            </div>
            <!-- end consulting day and time  -->


        </div>





        <?php
        include('commonpage/footer.php');
        ?>

        <!--javaScript link from bootsrap and jQuery link-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                loadSer();

                // start change consulting time 
                function loadSer() {
                    $.ajax({
                        url: 'editdoctorconsulting.php',
                        type: 'POST',
                        success: function (data) {
                            $("#modal-form table").html(data);
                        }
                    });
                }
                // end change consulting time


                // start update consulting time
                $('#change_btn').on("click", function () {
                    var fmon = $("#fmon").val();
                    var tmon = $("#tmon").val();
                    var ftue = $("#ftue").val();
                    var ttue = $("#ttue").val();
                    var fwed = $("#fwed").val();
                    var twed = $("#twed").val();
                    var fthur = $("#fthur").val();
                    var tthur = $("#tthur").val();
                    var ffri = $("#ffri").val();
                    var tfri = $("#tfri").val();
                    var fsat = $("#fsat").val();
                    var tsat = $("#tsat").val();


                    $.ajax({
                        url: 'updateconsultingtime.php',
                        type: 'POST',
                        data: {
                            fmon: fmon, tmon: tmon, ftue: ftue, ttue: ttue, fwed: fwed, twed: twed,
                            fthur: fthur, tthur: tthur, ffri: ffri, tfri: tfri, fsat: fsat, tsat: tsat
                        },
                        success: function (data) {
                            if (data == 1) {
                                alert("successfully updated");
                            } else {
                                alert("Failed to update");
                            }
                        }
                    });
                });
                // end update consulting time


            });
        </script>

    </body>

</html>