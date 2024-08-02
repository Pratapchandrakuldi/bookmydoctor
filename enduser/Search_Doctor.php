<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../fontawesome/css/all.css">
        <title>End user search doctor</title>
        <style>
            #font {
                width: 20px;
                height: 20px;
                margin: auto;
                margin-top: 20px;
                margin-left: 25%;
            }
        </style>

    </head>

    <body>
        <header>
            <div class="px-2 py-1 text-bg-dark">
                <div class="container-fluid-lg my-2 gx-3">
                    <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                        <li>
                            <a href="../enduser/Ehome.php" class="nav-link">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="../enduser/Aboutus.php" class="nav-link">
                                About US
                            </a>
                        </li>
                        <li>
                            <a href="../enduser/Search_Doctor.php" class="nav-link">
                                Search Doctor
                            </a>
                        </li>
                        <li>
                            <a href="../enduser/Contactus.php" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="../admin/adminlogin.php" class="nav-link">
                                Admin Log-in
                            </a>
                        </li>
                        <li>
                            <a href="../doctor/Doctorlogin.php" class="nav-link">
                                Doctor Log-in
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </header>
        <!-- start picture area -->
        <div class="card text-bg-dark rounded-0 border border-0">
            <img src="../picture/photoforresize.jpg" height="300px" class="card-img rounded-0" alt="Image not found">
        </div>
        <!-- end picture area-->


        <div id="displaydoctor"></div>


        <!-- start search doctor -->
        <div class="mb-3 text-center border border-2 border-dark my-5"
            style="width:800px;margin:auto;height:auto;background-color:lightgrey;margin-top:10px;" id="searchdetails">
            <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
                <b>Search Doctor</b>
            </div>
            <br>
            <div class="input-group mb-3">
                <select class="form-control" id="ser_city">
                    <option value="">--Please Select City--</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <select class="form-control" id="ser_loc">
                    <option value="">--Please Select Location--</option>
                </select>
            </div>
            <div class="input-group mb-3">
                <select class="form-control" id="ser_special">
                    <option value="">--Please Select Specialist--</option>
                </select>
            </div>
            <br>
            <div class="d-grid gap-2 d-md-block mx-auto">
                <button class="btn btn-primary" type="submit" id="search">Search</button>&nbsp;
                <button class="btn btn-primary" type="reset" id="Reset">Reset</button>
            </div><br>


        </div><br>


        <!--  start search doctor table-->



        <div id="modal1">

            <div class="mb-3 text-center border border-2 border-dark"
                style="width:90%;margin:auto;height:auto;background-color:white;margin-top:-6px;">
                <div class="d-grid gap-2 col-12 mx-auto bg-primary p-3 text-white fw-bold" style="font-size:20px;">
                    Available Doctor
                </div>
                <br>
                <div id="modal-form1">
                    <table style="margin-left:10px;cell-padding:10px;padding:40px;text-align:right;width:90%;">
                    </table>
                    <br>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button id="back-btn" class="btn btn-primary me-md-2" type="button">Back</button>

                </div> <br>
            </div>
        </div><br>
        <!--  end search doctor details -->



        <!--  start appointment modal-->
        <div class="modal" tabindex="-1" id="modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Patient Details</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div id="modal-form">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="col-sm-10 mx-auto">
                                            <div style='float:left;margin-top:10px;margin-bottom:10px;'>
                                                <lable>Name</lable>
                                            </div>
                                            <input type="text" class="form-control border border-2 border-success"
                                                placeholder="Enter Patient Name" name="pname" id="pname">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-sm-10 mx-auto">
                                            <div style='float:left;margin-top:10px;margin-bottom:10px;'>
                                                <lable style='float:left;'>Contact</lable>
                                            </div>
                                            <input type="text" class="form-control border border-2 border-success"
                                                placeholder="Enter Contact Number" name="pcontact" id="pcontact">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-sm-10 mx-auto">
                                            <div style='float:left;margin-top:10px;margin-bottom:10px;'>
                                                <lable style='float:left;'>Email</lable>
                                            </div>
                                            <input type="text" class="form-control border border-2 border-success"
                                                placeholder="Enter Email" name="pemail" id="pemail">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-sm-10 mx-auto">
                                            <div style='float:left;margin-top:10px;margin-bottom:10px;'>
                                                <lable style='float:left;'>City </lable>
                                            </div>
                                            <input type="text" class="form-control border border-2 border-success"
                                                placeholder="Enter City" name="pcity" id="pcity">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-sm-10 mx-auto">
                                            <div style='float:left;margin-top:10px;margin-bottom:10px;'>
                                                <lable style='float:left;'>Address</lable>
                                            </div>
                                            <input type="text" class="form-control border border-2 border-success"
                                                placeholder="Enter Address" name="paddress" id="paddress">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-sm-10 mx-auto">
                                            <div style='float:left;margin-top:10px;margin-bottom:10px;'>
                                                <lable style='float:left;'>Date of Appointment</lable>
                                            </div>
                                            <input type="date" class="form-control border border-2 border-success"
                                                placeholder="City Name" name="pdate" id="pdate">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-sm-10 mx-auto">
                                            <div style='float:left;margin-top:10px;margin-bottom:10px;'>
                                                <lable style='float:left;'>Appointment Time</lable>
                                            </div>
                                            <input type="time" class="form-control border border-2 border-success"
                                                placeholder="City Name" name="ptime" id="ptime">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="col-sm-10 mx-auto">
                                            <div style='float:left;margin-top:10px;margin-bottom:10px;'>
                                                <lable style='float:left;'>Remark</lable>
                                            </div>
                                            <input type="text" class="form-control border border-2 border-success"
                                                placeholder="Remark" name="premark" id="premark">
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">Cancle</button>
                        <button type="submit" class="btn btn-primary" id="psubmit">OK</button>
                    </div>
                </div>
            </div>
        </div>

        <!--  end appointment modal-->

        <!-- start view doctor details modal -->
        <div id="modal2">

            <div class="mb-3 text-center border border-2 border-dark"
                style="width:90%;margin:auto;height:auto;background-color:white;margin-top:-3px;">
                <div class="d-grid gap-2 col-12 mx-auto bg-primary p-3 text-white fw-bold" style="font-size:20px;">
                    Doctor Details
                </div>
                <br>
                <div id="modal-form2">
                    <table style="margin-left:10px;cell-padding:10px;padding:40px;text-align:right;width:90%;">
                    </table>

                </div>
                <div id="modal-form3">
                    <table style="margin-left:10px;cell-padding:10px;padding:40px;text-align:right;width:90%;">
                    </table>

                </div>
                <div id="modal-form4">
                    <table style="margin-left:10px;cell-padding:10px;padding:40px;text-align:right;width:90%;">
                    </table>

                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button id="back1-btn" class="btn btn-primary me-md-2" type="button">Back</button>

                </div> <br>
            </div>
        </div><br>
        <!-- end view doctor details modal -->


        <!-- start footer area -->
        <div class="container-fluid text-bg-dark" style="height:100px">
            <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
                <span class="  align-items-left" style="margin-left:30px;margin-top:20px; ">
                    <p>&#169 Doctor appointment All right reserved.</p>
                </span>
                <span class="d-flex  align-items-center" id="font">
                    <i class="fa-brands fa-facebook-f fa-lg" style="color: #ffffff;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa-brands fa-twitter fa-lg" style="color: #ffffff;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <b style="font-size:22px;">in</b>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa-brands fa-pinterest fa-lg" style="color: #ffffff;"></i>&nbsp;&nbsp;&nbsp;&nbsp;
                    <i class="fa-brands fa-google-plus-g fa-lg" style="color: #ffffff;"></i>
                </span>
            </footer>
        </div>
        <!-- end footer area -->

        <!--javaScript link from bootsrap and jQuery link-->

        <script src="..\js\bootstrap.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            // start show city table
            $(document).ready(function () {
                function loadDoctor2() {
                    $.ajax({
                        url: 'displayonlineDr.php',
                        type: 'POST',
                        success: function (data) {
                            $("#displaydoctor").html(data);
                        }
                    });
                }
                loadDoctor2();
                // start show city table



                function loadSer() {
                    $.ajax({
                        url: 'select_sercity.php',
                        type: 'POST',
                        success: function (data) {
                            $("#ser_city").append(data);
                            // $('#input').trigger("reset");
                        }
                    });
                }
                loadSer();

                $("#ser_city").on("change", function () {
                    var searchcity = $(this).val();
                    //  console.log(regcity);
                    $.ajax({
                        url: 'select_serloc.php',
                        type: 'POST',
                        data: { sercityid: searchcity },
                        success: function (data) {
                            // console.log(data);
                            $("#ser_loc").append(data);
                            // $('#input').trigger("reset"); 
                        }
                    });
                });


                $("#ser_loc").on("change", function () {
                    var searchloc = $(this).val();
                    //  console.log(regcity);
                    $.ajax({
                        url: 'select_serspecial.php',
                        type: 'POST',
                        data: { serlocid: searchloc },
                        success: function (data) {
                            // console.log(data);
                            $("#ser_special").append(data);
                            // $('#input').trigger("reset");
                        }
                    });
                });




                //start selected data from 
                $('#modal1').css("display", "none");
                $("#search").click(function () {

                    var serch_city = $('#ser_city').val();
                    var serch_loc = $('#ser_loc').val();
                    var serch_special = $('#ser_special').val();

                    // alert(serch_city);
                    // alert(serch_loc);
                    // alert(serch_special);
                    // alert(serch_drname);
                    if (serch_city != "" && serch_loc != "" && serch_special != "") {
                        $.ajax({
                            url: 'searchavailabledoctor.php',
                            type: 'POST',
                            data: {
                                serchcity: serch_city, serchloc: serch_loc,
                                serchspecial: serch_special
                            },
                            success: function (data) {
                                // console.log(data);
                                $('#modal-form1 table').html(data);
                                $('#searchdetails').css("display", "none");
                                $('#displaydoctor').css("display", "none");
                                $('#modal1').show();

                            }
                        });
                    } else {
                        alert("No record is found");
                    }
                });


                $(document).on("click", "#back-btn", function () {
                    $('#searchdetails').show();
                    $('#displaydoctor').show();
                    $('#modal1').css("display", "none");
                    $('#modal2').css("display", "none");

                }); 


                //start view doctor details modal 
                $('#modal2').css("display", "none");
                $(document).on("click", "#viewdoc-btn", function () {
                    var doctorId = $(this).data("view_id");
                    // var element = this;
                    // alert(doctorId);

                    $.ajax({
                        url: 'Doctorview.php',
                        type: 'POST',
                        data: { viewId: doctorId },
                        success: function (data) {
                            $("#modal-form2 table").html(data);
                            $('#modal1').css("display", "none");
                            $('#searchdetails').css("display", "none");
                            $('#displaydoctor').css("display", "none");
                            $("#modal2").show();
                        }
                    });
                });
                //end view  doctor details modal

                 

                //start back for doctor view details 
                $('#back1-btn').click(function () {
                    $('#modal2').css("display", "none");
                    $('#searchdetails').css("display", "none");
                    $('#displaydoctor').css("display", "none");
                    $("#modal-form3 ").css("display", "none");
                    $("#modal-form4 ").css("display", "none"); 
                    $("#modal1").show();
                });

                //start about doctor 
                $(document).on("click", "#about", function () {
                    $("#modal-form4 ").hide();
                    $("#modal-form3 ").show();
                    var aboutId = $(this).data("about_id");
                    // alert(aboutId);
                    $.ajax({
                        url: 'select_doctorabout.php',
                        type: 'POST',
                        data: { aboutId: aboutId },
                        success: function (data) {
                            $("#modal-form3 table").html(data);
                        }
                    });
                });
                //end about doctor

                 

                //start image Gallery doctor 
                $(document).on("click", "#Imagegallery", function () {
                    $("#modal-form3 ").hide();
                    $("#modal-form4 ").show();
                    var galleryId = $(this).data("gallery_id"); 
                    $.ajax({
                        url: 'select_doctorgallery.php',
                        type: 'POST',
                        data: { galleryId: galleryId },
                        success: function (data) {
                            $("#modal-form4 table").html(data);
                        }
                    });
                }); 
                //end Image Gallery doctor



                // start patients enter details 
                    $(document).on("click", "#appoint-btn", function () {
                        $("#modal").modal('show'); 
                        var appointid = $(this).data('appoint_id');
                        $.ajax({
                            url: 'selectappointdoctorID.php',
                            type: 'POST',
                            data: { appointid: appointid },
                            success: function (data) {
                            }
                        });
                    });
                



                $('#psubmit').click(function () {
                    var p_name = $('#pname').val();
                    var p_contact = $('#pcontact').val();
                    var p_email = $('#pemail').val();
                    var p_city = $('#pcity').val();
                    var p_address = $('#paddress').val();
                    var p_date = $('#pdate').val();
                    var p_time = $('#ptime').val();
                    var p_remark = $('#premark').val();

                    // alert(doctor_id);
                    $.ajax({
                        url: 'insertpatientdetails.php',
                        type: 'POST',
                        data: {
                            p_name: p_name, p_contact: p_contact,
                            p_email: p_email, p_city: p_city, p_address: p_address, p_date: p_date, p_time: p_time, p_remark: p_remark
                        },
                        success: function (data) {
                            alert(data);
                            $('#input').trigger("reset");
                            $("#modal").modal('hide');
                        }
                    });

                });
                // end patients enter details


            });

        </script>

    </body>

</html>