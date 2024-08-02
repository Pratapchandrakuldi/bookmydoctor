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
        </style>


    </head>

    <body>
        <?php
        include('commonpage/header.php');
        ?>
        <div class="container-fluid" id="content">



            <!--  start modal-->
            <div id="modal">
                <div class="mb-3 text-center border border-2 border-dark"
                    style="width:90%;margin:auto;height:auto;background-color:lightgreen;margin-top:60px;">

                    <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white" style="font-size:20px;">
                        <b> Appointment Details</b>
                    </div>
                    <div id="modal-form">

                        <br>
                    </div>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end">
                            <li class="page-item disabled">
                                <a class="page-link text-white bg-primary">Pre</a>
                            </li>
                            <li class="page-item"><a class="page-link text-white bg-primary" href="#">1</a></li>
                            <li class="page-item">
                                <a class="page-link text-white bg-primary" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!--  end  modal-->


            <!--  start modal-->
            <div id="modal1">
                <div class="mb-3 text-center border border-2 border-dark"
                    style="width:800px;margin:auto;height:500px;background-color:lightgreen;margin-top:60px;">
                    <div class="d-grid gap-2 col-12 mx-auto bg-primary p-3 text-white fw-bold" style="font-size:20px;">
                        <b>Patient Details</b>
                    </div>
                    <div id="modal-form1">
                        <table style="margin-top:80px;margin:auto;">
                        </table>
                        <br>
                    </div>
                    <div class="d-grid gap-2 d-md-block mx-auto">
                        <button class="btn btn-primary" type="submit" id="pback">Back</button>
                    </div><br>
                </div>
            </div><br>
            <!--  end  modal-->

        </div>

        <?php
        include('commonpage/footer.php');
        ?>

        <!--javaScript link from bootsrap and jQuery link-->

        <!-- <script src="..\js\bootstrap.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            // start show city table
            $(document).ready(function () {
                function loadTable3() {
                    $.ajax({
                        url: 'displaypatients.php',
                        type: 'POST',
                        success: function (data) {
                            $("#modal-form").html(data);
                        }
                    });
                }
                loadTable3();
                // start show city table


                // start view show modal
                $("#modal1").css("display", "none");
                $(document).on("click", "#view-btn", function () {
                    $("#modal1").show();
                    var viewid = $(this).data("pvid");
                    // alert(viewid);
                    $.ajax({
                        url: 'viewpatientdetails.php',
                        type: 'POST',
                        data: { view_id: viewid },
                        success: function (data) {
                            $("#modal-form1 table").html(data);
                            $("#modal").css("display", "none");
                        }
                    });
                });
                // end view show modal

                //start back button
                $('#pback').click(function(){
                    $("#modal1").css("display", "none");
                    $("#modal").show();
                }); 
                // end back button



                // start delete show modal
                 
                $(document).on("click", "#delete-btn", function () {
          if (confirm("Do you want to really delete this city?")) {
            var patientId = $(this).data("pdid");
            var element = this;
            // alert(patientId);

            $.ajax({
              url: 'Deletepatientdetails.php',
              type: 'POST',
              data: { deletepid: patientId },
              success: function (data) {
                if (data == 1) {
                  $(element).closest("tr").fadeOut();

                } else {
                  alert("Data can't delete");
                }
              }
            });
          }
        });
                // end delete show modal



            });
        </script>


    </body>

</html>