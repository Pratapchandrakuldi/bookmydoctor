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
        </style>

    </head>

    <body>
        <?php
        include('commonpage/header.php');
        ?>
        <!-- #region -->

        <div class="container-fluid" id="content">
            <!-- start add image table-->
            <div class="mb-3 text-center border border-2 border-dark my-5"
                style="width:800px;margin:auto;height:250px;background-color:lightgreen;margin-top:10px;">
                <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white ">
                    Change Profile Picture
                </div>
                <br>


                <br>
                <form id="myform" method="post">
                    <div class="col-sm-5 mx-auto">
                        <span id="Availability">Upload image:</span><br>
                        <input type="file" class="form-control border border-2 border-success" id="file2" name="file2">
                        <!-- <span id="Availability"></span> -->
                    </div>
                    <br>

                    <div class="d-grid gap-2 d-md-flex col-2  mx-auto ">
                        <button class="btn btn-primary me-md-2" id="addimage" type="submit" name="addimage">Chnage
                            Image</button>
                    </div>
                </form>
            </div>
            <!--end add image table-->





        </div>


        <?php
        include('commonpage/footer.php');
        ?>




        <!--javaScript link from bootsrap and jQuery link-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("form").on('submit', function () {


                    $.ajax({
                        url: 'uploadprofilepicture.php',
                        method: 'POST',
                        data: new FormData(this),
                        contentType: false,//the browser will automatically encode the form data 
                        cache: false,
                        processData: false,
                        success: function (data) {
                            if (data == TRUE) {
                                alert(data);
                                //  $('#input').trigger("reset");
                                $('#file2').val('');
                                ImageData();
                                // console.log(data);
                            }
                        }
                    });
                });




            });
        </script>



    </body>

</html>