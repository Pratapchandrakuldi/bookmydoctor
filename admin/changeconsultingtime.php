<?php

include('../connectiondatabase.php');
session_start();
if (!isset($_SESSION['adminname']) && !isset($_SESSION['adminpassword'])) {
    header('location:adminlogin.php');
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
            <!-- start search doctor -->
            <div class="mb-3 text-center border border-2 border-dark my-5"
                style="width:800px;margin:auto;height:200px;background-color:lightgreen;margin-top:10px;">
                <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
                    Change consulting Day and Time
                </div><br><br>
                <div class="col-sm-10 mx-auto">
                    <select type="text" class="form-control border border-2 border-success" name="" id="doctor">
                        <option>--- Please Select Doctor ---</option>
                    </select>
                </div>
            </div><br><br>
            <!-- end search doctor -->


            <!-- start consulting day and time  -->
            <div id="modal1">
                <div class="mb-3 text-center border border-2 border-dark my-5"
                    style="width:800px;margin:auto;height:460px;background-color:lightgreen;margin-top:10px;">
                    <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
                        Consulting Day And Time:-
                    </div><br>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button id="back-btn1" class="btn btn-primary me-md-2" type="button">Hide</button>

                    </div>
                    <div id="modal-form">
                        <table width="100%" padding="40px">
                        </table><br>
                        <div class="d-grid gap-2 d-md-block mx-auto">
                            <button class="btn btn-primary" type="submit" id="change_btn">Change Time</button>&nbsp;
                            <button class="btn btn-primary" type="reset" id="reset_btn">Reset</button>
                        </div>
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
                function loadSer() {
                    $.ajax({
                        url: 'selectdoctorname.php',
                        type: 'POST',
                        success: function (data) {
                            $("#doctor").append(data);
                            // $('#input').trigger("reset");
                        }
                    });
                }
                loadSer();

                // start change consulting time
                $("#modal1").hide();
                //start change time 
                $('#doctor').on("change", function (e) {
                    e.preventDefault();
                    $("#modal1").show();
                    var doctorId = $("#doctor").val();
                    // alert(doctorId);
                    $.ajax({
                        url: 'selectconsultingtime.php',
                        type: 'POST',
                        data: { doctorid: doctorId },
                        success: function (data) {
                            $("#modal-form table").html(data);
                            // $('#input').trigger("reset");
                        }
                    });
                });
                // end change consulting time

                // start hide consulting time
                $('#back-btn1').on("click", function (e) {
                    e.preventDefault();
                    $("#modal1").hide();
                    var doctorId = $("#doctor").val('');
                });
                // end hide consulting time


                // start update consulting time
                $('#change_btn').on("click", function () { 
                    var update_Id = $("#reg").val();
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
                        url: 'updatedoctorconsult.php',
                        type: 'POST',
                        data: { id: update_Id, fmon: fmon, tmon: tmon, ftue: ftue,ttue: ttue, fwed: fwed, twed: twed,
                            fthur: fthur, tthur: tthur, ffri: ffri, tfri: tfri,fsat: fsat, tsat: tsat},
                        success: function (data) {
                            if (data == 1) {
                                $("#modal1").hide();
                                alert("successfully updated");
                                var doctorId = $("#doctor").val('');
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