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
                height: auto;
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
            <!-- start edit doctor details modal-->


            <div id="modal1">

                <div class="mb-3 text-center border border-2 border-dark"
                    style="width:50%;margin:auto;height:auto;background-color:lightgreen;margin-top:10px;">
                    <div class="d-grid gap-2 col-12 mx-auto bg-primary p-3 text-white fw-bold" style="font-size:20px;">
                        Edit Doctor Details
                    </div>
                    <br>
                    <div id="modal-form1">
                        <table style="margin:auto;cell-padding:10px;padding:40px;text-align:right;">
                        </table>
                        <br>
                    </div> <br>
                    <div class="d-grid gap-2 d-md-block mx-auto">
                        <button class="btn btn-primary" type="submit" id="updatereg_btn">Update</button>&nbsp;
                        <a class="btn btn-primary" href="editprofile.php" id="cancle_btn">Cancle</a>
                    </div>
                    <br>
                </div>
            </div><br>
            <!-- end edit doctor details modal-->
        </div>

        <?php
        include('commonpage/footer.php');
        ?>

        <!--javaScript link from bootsrap and jQuery link-->

        <!-- <script src="..\js\bootstrap.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                editprof();

                // start edit doctor profile
                function editprof() {
                    $.ajax({
                        url: 'editdoctorprofile.php',
                        type: 'POST',
                        success: function (data) {
                            $("#modal-form1 table").html(data);

                        }
                    });
                }
                // end edit doctor profile       



                // start update doctor dertails
                $('#updatereg_btn').on("click", function () {

                    var reg_edate = $("#reg_edate").val();
                    var reg_ecity = $("#reg_ecity").val();
                    var reg_eloc = $("#reg_eloc").val();
                    var reg_especial = $("#reg_especial").val();
                    var reg_edrname = $("#reg_edrname").val();
                    var reg_equalification = $("#reg_equalification").val();
                    var reg_eexperience = $("#reg_eexperience").val();
                    var reg_ework = $("#reg_ework").val();
                    var reg_edrabout = $("#reg_edrabout").val();
                    var reg_edraddress = $("#reg_edraddress").val();
                    var reg_edrcontact = $("#reg_edrcontact").val();
                    var reg_edrvshr = $("#reg_edrvshr").val();
                    var reg_edrcharge = $("#reg_edrcharge").val();
                    var reg_edremail = $("#reg_edremail").val();
                    $.ajax({
                        url: 'updatedoctorprofile.php',
                        type: 'POST',
                        data: {
                            reg_edate: reg_edate, reg_ecity: reg_ecity,
                            reg_eloc: reg_eloc, reg_especial: reg_especial, reg_edrname: reg_edrname,
                            reg_equalification: reg_equalification, reg_eexperience: reg_eexperience,
                            reg_ework: reg_ework, reg_edrabout: reg_edrabout, reg_edraddress: reg_edraddress,
                            reg_edrcontact: reg_edrcontact, reg_edrvshr: reg_edrvshr, reg_edrcharge: reg_edrcharge,
                            reg_edremail: reg_edremail
                        },
                        success: function (data) {
                            if (data == 1) {
                                $("#modal4").hide();
                                $('#modal1').show();
                                alert("successfully updated");
                            } else {
                                alert("Failed to update");
                            }
                        }
                    });

                });
                //end update doctor details




            });
        </script>

    </body>

</html>