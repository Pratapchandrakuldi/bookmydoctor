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
            <!-- start modal-->
            <div id="modal2">

                <div class="mb-3 text-center border border-2 border-dark"
                    style="width:50%;margin:auto;height:800px;background-color:lightgreen;margin-top:10px;">
                    <div class="d-grid gap-2 col-12 mx-auto bg-primary p-3 text-white fw-bold" style="font-size:20px;">
                        DR. Details
                    </div>
                    <br>
                    <div id="modal-form1">
                        <table style="margin:auto;cell-padding:10px;padding:40px;text-align:right;">
                        </table>
                        <br>
                    </div> <br>
                </div>
            </div><br><br><br>
            <!--  end  modal -->



            <!-- start consulting modal-->
            <div id="modal3">
                <div class='mb-3 text-center border border-2 border-dark'
                    style='width:50%;margin:auto;height:500px;background-color:lightgreen;margin-top:5px;'>
                    <div class='d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white fw-bold' style='font-size:20px;'>
                        Consulting Day and Time
                    </div>
                    <div id="modal-form2">
                        <table class='table'>
                        </table>
                    </div><br>
                    <div class="d-grid gap-2 d-md-block mx-auto">
                        <a class="btn btn-primary" href="viewprofile.php" type="submit" id="back">Back</a>&nbsp;
                    </div>
                </div>
            </div>

            <!-- end consulting modal-->
        </div>
        <?php
        include('commonpage/footer.php');
        ?>

        <!--javaScript link from bootsrap and jQuery link-->

        <!-- <script src="..\js\bootstrap.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                viewDoctor();
                consultingtime();

                // start view doctor details 
                function viewDoctor() {
                    $('#modal1').css("display", "none");
                    $.ajax({
                        url: 'viewdoctor2.php',
                        type: 'POST',
                        success: function (data) {
                            $("#modal-form1 table").html(data);
                            $('#modal1').css("display", "none");
                            $("#modal2").show();
                        }
                    });
                }
                // end view doctor details 

                //start view doctor consulting time details
                function consultingtime() {
                    $.ajax({
                        url: 'viewconsultingtime.php',
                        type: 'POST', 
                        success: function (data) {
                            $("#modal-form2 table").html(data); 
                        }
                    });
                }
                // end view doctor details 
               

            });
        </script>

    </body>

</html>