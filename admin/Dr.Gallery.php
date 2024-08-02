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
            <!-- start search doctor -->
            <div class="mb-3 text-center border border-2 border-dark my-5"
                style="width:800px;margin:auto;height:auto;background-color:lightgreen;margin-top:10px;"
                id="searchdetails">
                <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
                    <b>Search Doctor</b>
                </div>
                <br>
                <div class="input-group mb-3">
                    <select class="form-control" id="sercity">
                        <option value="">--Please Select City--</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="serloc">
                        <option value="">--Please Select Location--</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="serspecial">
                        <option value="">--Please Select Specialist--</option>
                    </select>
                </div>
                <div class="input-group mb-3">
                    <select class="form-control" id="serdrname">
                        <option value="">--Please Select Dr.name--</option>
                    </select>
                </div>
                <br>
                <div class="d-grid gap-2 d-md-block mx-auto">
                    <button class="btn btn-primary" type="submit" id="search">Search</button>&nbsp;
                    <button class="btn btn-primary" type="reset" id="Reset">Reset</button>
                </div><br>


            </div><br>


            <!--  start search doctor table-->
            <div id="modal1"> </div><br><br><br>
            <!--  end   search doctor table-->

            <!-- end search doctor -->

            <!-- start modal-->
            <div id="modal2">

                <div class="mb-3 text-center border border-2 border-dark"
                    style="width:90%;margin:auto;height:auto;background-color:lightgreen;margin-top:10px;">
                    <div class="d-grid gap-2 col-12 mx-auto bg-primary p-3 text-white fw-bold" style="font-size:20px;">
                        DR. Details
                    </div>
                    <br>
                    <div id="modal-form1">
                        <table style="margin:auto;cell-padding:10px;padding:40px;text-align:right;">
                        </table>
                        <br>
                    </div> <br>
                    <div class="d-grid gap-2 d-md-block mx-auto">
                        <button class="btn btn-primary" type="submit" id="back">Back</button>
                    </div><br>

                </div>

            </div><br><br><br>
            <!--  end  modal -->





        </div>




        <?php
        include('commonpage/footer.php');
        ?>

        <!--javaScript link from bootsrap and jQuery link-->

        <!-- <script src="..\js\bootstrap.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                function loadSer() {
                    $.ajax({
                        url: 'selectsercity.php',
                        type: 'POST',
                        success: function (data) {
                            $("#sercity").append(data);
                            // $('#input').trigger("reset");
                        }
                    });
                }
                loadSer();

                $("#sercity").on("change", function () {
                    var sercity = $(this).val();
                    //  console.log(regcity);
                    $.ajax({
                        url: 'selectserloc.php',
                        type: 'POST',
                        data: { sercity_id: sercity },
                        success: function (data) {
                            // console.log(data);
                            $("#serloc").append(data);
                            // $('#input').trigger("reset"); 
                        }
                    });
                });


                $("#serloc").on("change", function () {
                    var serloc = $(this).val();
                    //  console.log(regcity);
                    $.ajax({
                        url: 'selectserspecial.php',
                        type: 'POST',
                        data: { serloc_id: serloc },
                        success: function (data) {
                            // console.log(data);
                            $("#serspecial").append(data);
                            // $('#input').trigger("reset");
                        }
                    });
                });



                $("#serspecial").on("change", function () {
                    var serspecial = $(this).val();
                    //  console.log(regcity);
                    $.ajax({
                        url: 'selectserdrname.php',
                        type: 'POST',
                        data: { serspecial_id: serspecial },
                        success: function (data) {
                            // console.log(data);
                            $("#serdrname").append(data);
                            // $('#input').trigger("reset"); 
                        }
                    });
                });


                //start selected data from 
                $("#search").click(function () {

                    var serch_city = $('#sercity').val();
                    var serch_loc = $('#serloc').val();
                    var serch_special = $('#serspecial').val();
                    var serch_drname = $('#serdrname').val();

                    // alert(serch_city);
                    // alert(serch_loc);
                    // alert(serch_special);
                    // alert(serch_drname);
                    if (serch_city != "" && serch_loc != "" && serch_special != "" && serch_drname != "") {
                        $.ajax({
                            url: 'searchDr.name.php',
                            type: 'POST',
                            data: {
                                serchcity: serch_city, serchloc: serch_loc,
                                serchspecial: serch_special, serchdrname: serch_drname
                            },
                            success: function (data) {
                                // console.log(data);
                                $('#modal1').html(data);
                                $('#searchdetails').css("display", "none");
                                $('#modal1').show();

                            }
                        });
                    } else {
                        alert("No record is found");
                    }
                });




                $(document).on("click", "#back-btn", function () {
                    $('#searchdetails').show();
                    $('#modal1').css("display", "none");

                });



                // start view doctor details
                $('#modal2').css("display", "none");
                // start show modal
                function drimage(){
                $(document).on("click", "#view-btn", function () {
                    $('#modal1').css("display", "none");
                    var serch_drname = $('#serdrname').val();
                    $.ajax({
                        url: 'viewdoctoralbhum.php',
                        type: 'POST',
                        data: {serchdrname:serch_drname},
                        success: function (data) {
                            $("#modal-form1 table").html(data);
                            $('#modal1').css("display", "none");
                            $("#modal2").show();
                        }
                    });
                });
            }
            drimage();
                // end show modal

                $('#back').on("click", function () {
                    $("#modal2").hide();
                    $("#modal3").hide();
                    // $("#modal4").hide();
                    $('#modal1').show();
                }); 
                // end edit doctor details





                // start delete doctor details
                $(document).on("click", "#delete-imgbtn", function () {
                    if (confirm("Do you want to really delete this Doctor details?")) {
                        var imgId = $(this).data("imgid");
                        var element = this;
                        // alert(imgId);

                        $.ajax({
                            url: 'Deletedoctorphoto.php',
                            type: 'POST',
                            data: { deleteimgId: imgId },
                            success: function (data) {
                                if (data == 1) {
                                    $('#modal1').hide();
                                    $('#searchdetails').hide();
                                    $('#modal2').show();
                                    // $(element).closest("tr").fadeOut();
                                    drimage();

                                } else {
                                    alert("Doctordetails  unable to  delete!");
                                }
                            }
                        });
                    }
                });
                //end delete doctor details


            });
        </script>

    </body>

</html>