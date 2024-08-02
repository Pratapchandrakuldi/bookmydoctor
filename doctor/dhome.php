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
          <div class="carousel-caption     fw-bold" styel="margin-top:-100px;">
            <h1 class="fw-bold text-dark"><b><i>-:Welcome to platform of BookMyDoctor:-</i></b></h1>
            <p>
            <h3 class="fw-bold text-dark fw-italic">
              This is our great honour to join with us,
              <?php echo $_SESSION['doctorname']; ?>
            </h3>
            </p>
            <p>
            <h5 class="fw-bold text-dark">
              Here you can View and Edit Personal Details Like:
</h5></p>
              <h6  class="fw-bold text-dark fw-italic">
              <ul  style="list-style-type:none;">
                <li><p>
                  Change Profile Picture
</p></li>
                <li><p>View Own Details</p></li>
                <li><p>Edit Personal Details</p></li>
                <li><p>Change password</p></li>
              </ul>
            </h6>
          </div>
        </div>
      </div>
    </div>
    <?php
    include('commonpage/footer.php');
    ?>



    <!--javaScript link from bootsrap and jQuery link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


  </body>

</html>