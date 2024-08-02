<?php
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
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <title>Admin home page</title> 

  </head>

  <body>
    <?php
    include('commonpage/header.php');
    ?>
    <!-- #region -->
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner" style="height:550px">
        <div class="carousel-item active">
          <img src="../picture/medical-background.jpg" class="d-block w-100" alt="image not found" style="height:550px">

           
          <div class="carousel-caption d-none d-md-block   fw-bold">
          <div><i class="fa-solid fa-star-of-life fa-spin fa-2xl" style="color: #dd0808;"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <i class="fa-solid fa-solid fa-hospital fa-bounce fa-xl" style="color: #ddd60e;"></i>
                               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa-solid fa-star-of-life fa-spin fa-2xl" style="color: #dd0808;"></i>
                               </div>
            <h1 class="fw-bold text-dark"><b><i>-:Welcome to BookMyDoctor MR.
                  <?php echo $_SESSION['adminname']; ?>:-
                </i></b></h1>
            <p>
            <h5 class="fw-bold text-dark">Admin have the power to elevate other users to admin level or demote other
              admins at any time.
              </p>
              Require approval for all new users
              <p>
            </h5>

            </p>
            <p>
            <h5 class="fw-bold text-dark">
              Approve/Deny users
              </p>
              <p>
              <h5 class="fw-bold text-dark">
                Set/Remove Admins
                </p>
                <p>
                <h5 class="fw-bold text-dark">
                  See a list of all website accounts using your customer number
                  </p>
                  <p>
                  <h5 class="fw-bold text-dark">
                    Set permission for each users etc.
                    </p>
                  </h5>
                  </pre>
          </div>
        </div>
      </div>
    </div>
    <?php
    include('commonpage/footer.php');
    ?>



    <!--javaScript link from bootsrap and jQuery link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="../fontawesome/js/all.js"></script>


  </body>

</html>