<?php
session_start();
include ('../connectiondatabase.php');
 if(isset($_SESSION['doctorname']) && isset( $_SESSION['doctorid'])){
  header('location:dhome.php');
  
   
 }
 
 
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css"> 
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <title>Admin Login</title>
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

    <div class="card text-bg-dark rounded-0 border border-0">
      <img src="../picture/doctorpic.jpg" height="400px" class="card-img rounded-0" alt="Image not found">
    </div>
    <div class="d-grid gap-2">
      <button class="btn btn-primary  rounded-0 fw-bolder" type="button">Doctor Log-in</button>
    </div>

     <!-- start login area -->
    <div class="mb-3 text-center border border-1 border-dark my-2 bg-info rounded-4" style="width:800px;margin:auto;height:250px;">
    <form method="post">
      <div class="row gx-3 gy-0 align-items-center">
        <!-- <div class="col-4"></div> -->
        <div class="mb-3 col-4 grid text-center col-sm-10 mx-auto">
          <label class="form-label text-success fw-bolder">Username</label>
          <input type="text" class="form-control border border-success" placeholder="Enter your username"
           id="dusername">
        </div>
      </div>
      <div class="row gx-3 gy-0 align-items-center">
        <!-- <div class="col-4  "></div> -->
        <div class="mb-3 col-4 grid text-center g-start-2 col-sm-10 mx-auto">
          <label class="form-label text-success fw-bolder">Password</label>
          <input type="password" class="form-control border border-success" placeholder="Enter your password"
            id="dpassword">
        </div>
      </div>
      <div class="row gx-3 gy-0 align-items-center">
        <!-- <div class="col-4  "></div> -->

        <div class="col-4 d-grid gap-2 d-md-flex justify-content-md-end">
          <button class="btn btn-primary me-md-2" type="submit"  id="doclogin">Log-in</button>
          <button class="btn btn-primary me-md-2" type="reset" name="cancle">Cancle</button>
        </div>
      </div>
    </form>
    </div>
    <!-- end login area -->


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
      
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="C:\xampp\htdocs\project3\BookMyDoctor\fontawesome-free-6.4.0-web\js.js"></script>
      <script src="https://kit.fontawesome.com/ecf8f4889e.js" crossorigin="anonymous"></script>
      <script>
              $(document).ready(function(){ 
                 $("#doclogin").click(function(){
                   
                  var dusername = $("#dusername").val(); 
                  var dpassword = $("#dpassword").val(); 
                  // console.log(dusername);
                  // console.log(dpassword);
                  $.ajax({
                    url:'readdoctor.php',
                    type:'POST',
                    data:{dusername:dusername,
                    dpassword:dpassword},
                    success:function(data){ 
                           alert(data); 
                    }
                  });
                 });
                 
              });

              </script>


    </body>

    </html>