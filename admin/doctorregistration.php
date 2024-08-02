<?php

include('../connectiondatabase.php');
session_start();
if (!isset($_SESSION['adminname'])) {
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
    <title>Doctor Registration</title>
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
    <!-- start rgistration form  -->
    <div class="container-fluid" id="content">


      <form id="regform">
        <div class="mb-3 text-center border border-2 border-dark my-5"
          style="width:70%;margin:auto;height:auto;background-color:lightgreen;margin-top:10px;">
          <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
            DR. Registration Form
          </div><br>
          <div class="input-group mb-3">

            <input type="date" class="form-control" placeholder="Registration Date" name="regdate" id="regdate">
          </div>

          <div class="input-group mb-3">
            <select class="form-control" id="regcity"  name="regcity">
              <option value="">--Please Select City--</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <select class="form-control" id="regloc" name="regloc" >
              <option>--Please Select Location--</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <select class="form-control" id="regspecial"  name="regspecial">
              <option>--Please Select Specialist--</option>
            </select>

          </div>
          <div class="input-group  mb-3"> 
            <input type="text" class="form-control" placeholder="Dr.Name"  name="drname" id="drname">
          </div>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Qualification"   name="qualify" id="qualify">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="text" class="form-control" placeholder="Experience"  name="experience"  id="experience">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <input type="text" class="form-control" placeholder="Job/Private"   name="job"  id="job">
          </div>


          <div class="input-group">
            <span class="input-group-text">About</span>
            <textarea class="form-control" aria-label="With textarea" name="about" id="about"></textarea>
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-text">Address</span>
            <textarea class="form-control" aria-label="With textarea" name="address" id="address"></textarea>
          </div>
          <br>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Contact" name="drcontact" id="">

          </div>
          <div>
            <div class="input-group ">
              <span class="input-group-text">Visiting Hour</span>
              <textarea class="form-control"  name="vshour"></textarea> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <div style="width:520px;">
                <input type="number" class="form-control" placeholder="Consulting Charge"  name="drcharge">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="email" class="form-control" placeholder="Email"  name="dremail">
              </div>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Password"  name="drpassword">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="text" class="form-control" placeholder="Confirm Password"  name="drcpassword">
            </div>
          </div>
          <div>
            <p><b>Consulting Day And Time:-<b></p>
          </div>
          <div class="row g-3">
            <div class="col-md-4">
              <label class="form-label">DAY</label>
              <input type="text" class="form-control" id="" value="Monday">
            </div>
            <div class="col-md-4">
              <label class="form-label">FROM TIME</label>
              <input type="text" class="form-control" id="fmon" name="fmon">
            </div>
            <div class="col-md-4">
              <label class="form-label">TO TIME</label>
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="tmon" name="tmon">
              </div>
            </div>
          </div><br>
          <div class="row g-3">
            <div class="col-md-4">
              <input type="text" class="form-control" id="" value="Tuesday">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" id="ftue" name="ftue">
            </div>
            <div class="col-md-4">
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="ttue" name="ttue">
              </div>
            </div>
          </div><br>
          <div class="row g-3">
            <div class="col-md-4">
              <input type="text" class="form-control" id="" value="Wednesday">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" id="fwed" name="fwed">
            </div>
            <div class="col-md-4">
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="twed" name="twed">
              </div>
            </div>
          </div><br>
          <div class="row g-3">
            <div class="col-md-4">
              <input type="text" class="form-control" id="" value="Thursday">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" id="fthur" name="fthur">
            </div>
            <div class="col-md-4">
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="tthur" name="tthur">
              </div>
            </div>
          </div><br>
          <div class="row g-3">
            <div class="col-md-4">
              <input type="text" class="form-control" id="" value="Friday">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" id="ffri" name="ffri">
            </div>
            <div class="col-md-4">
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="tfri" name="tfri">
              </div>
            </div>
          </div><br>
          <div class="row g-3">
            <div class="col-md-4">
              <input type="text" class="form-control" id="" value="Saturday">
            </div>
            <div class="col-md-4">
              <input type="text" class="form-control" id="fsat" name="fsat">
            </div>
            <div class="col-md-4">
              <div class="input-group has-validation">
                <input type="text" class="form-control" id="tsat" name="tsat">
              </div>
            </div>
          </div><br>
          <div class="d-grid gap-2 d-md-block mx-auto">
            <button class="btn btn-primary" type="submit" id="register">Register</button>&nbsp;
            <button class="btn btn-primary" type="reset">Reset</button>
          </div><br><br>




        </div>
      </form>

    </div>




    <?php
    include('commonpage/footer.php');
    ?>

    <!--javaScript link from bootsrap and jQuery link-->

    <!-- <script src="..\js\bootstrap.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        function loadReg() {
          $.ajax({
            url: 'selectregcity.php',
            type: 'POST', 
            success: function (data) {
              $("#regcity").append(data);
              }  
          });
        }
        loadReg();

        $("#regcity").on("change", function () { 
          var regcity = $(this).val();
              //  console.log(regcity);
              $.ajax({
                       url:'selectregloc.php',
                       type:'POST',
                       data:{regcity_id:regcity},
                       success:function(data){
                        // console.log(data);
                        $("#regloc").append(data); 
                       }
              });
           
        });
        function loadRegsp() {
          $.ajax({
            url: 'selectregspecial.php',
            type: 'POST', 
            success: function (data) {
              $("#regspecial").append(data);
              }  
          });
        }
        loadRegsp();

        $("#register").on("click",function(){ 
                var regform=$('#regform').val(); 
                // if(regform==""){
                //   alert("All field is required");
                // }else{ 
             $.ajax({
              url:'insertregform.php',
              type:'POST',
              cache:false,
              data:$('#regform').serialize(),
              success:function(data){
                      alert(data);
                      $('#input').trigger("reset");
                      
              }
             });
            // }
        });
        
      });
    </script>


  </body>

</html>