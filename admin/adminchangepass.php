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
            <!-- start add city table-->
            <div class="mb-3 text-center border border-2 border-dark my-5"
                style="width:800px;margin:auto;height:360px;background-color:lightgreen;margin-top:10px;">
                <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
                    <b style='font-size:25px;'>Update Password</b>
                </div>
                <br><br>
                <form id="myform">
                    <div class="col-sm-10 mx-auto">
                        <input type="text" class="form-control border border-2 border-success" placeholder="Old Password"
                            name="oldpass" id="oldpass"> 
                    </div>
                    <br>
                    <div class="col-sm-10 mx-auto">
                        <input type="text" class="form-control border border-2 border-success" placeholder="New Password"
                            name="newpass" id="newpass"> 
                    </div>
                    <br>
                    <div class="col-sm-10 mx-auto">
                        <input type="text" class="form-control border border-2 border-success" placeholder="Confirm Password"
                            name="confirmpass" id="confirmpass"> 
                    </div>
                    <br>
                    <div class="d-grid gap-2 d-md-flex col-3  mx-auto ">
                        <button class="btn btn-primary me-md-2" id="changepass" type="submit">Update</button>
                        <button class="btn btn-primary" type="reset">Cancle</button>
                    </div>
                </form>
            </div>
            <!--end add city table-->

        </div>





        <?php
        include('commonpage/footer.php');
        ?>

        <!--javaScript link from bootsrap and jQuery link-->

        <!-- <script src="..\js\bootstrap.js"></script> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script> 
            $(document).ready(function () { 
                // start insert city table
                $('#changepass').on("click", function () {
                    var old_pass = $('#oldpass').val();
                    var new_pass = $('#newpass').val();
                    var confirm_pass = $('#confirmpass').val();
                    if (old_pass == "" || new_pass == "" || confirm_pass == "") {
                        alert("All field is required!");
                    } else {
                        $.ajax({
                            url: 'updateadminpass.php',
                            type: 'POST',
                            data: { oldpass: old_pass,newpass:new_pass,confirmpass:confirm_pass },
                            success: function (data) { 
                                    $('#input').trigger("reset");
                                    alert(data); 
                                 
                            }
                        });
                    }
                });
                // start insert city table
 
            });
        </script>


    </body>

</html>