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
    <link rel="stylesheet" href="../fontawesome/css/all.css"> 
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
        height: 100%;
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
      <!-- start add city table-->
      <div class="mb-3 text-center border border-2 border-dark my-5"
        style="width:800px;margin:auto;height:200px;background-color:lightgreen;margin-top:10px;">
        <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
          Add City
        </div>
        <br><br>
        <form id="myform">
          <div class="col-sm-10 mx-auto">
            <input type="text" class="form-control border border-2 border-success" placeholder="City Name"
              name="cityname" id="cityname">
            <span id="Availability"></span>
          </div>
          <br>
          <div class="d-grid gap-2 d-md-flex col-3  mx-auto ">
            <button class="btn btn-primary me-md-2" id="addcity"  type="submit">ADD CITY</button>
            <button class="btn btn-primary" type="reset">RESET</button>
          </div>
        </form>
      </div>
      <!--end add city table-->

      <!--start city table-->
      <div class="mb-3 text-center border border-2 border-dark my-2"
        style="width:800px;margin:auto;height:auto;background-color:lightgreen;">
        <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
          City List
        </div>
        <div id="display"></div>


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
    <!-- end city table-->

    <!--  start modal-->
    <div id="modal">
      <div class="mb-3 text-center border border-2 border-dark"
        style="width:800px;margin:auto;height:300px;background-color:lightgreen;margin-top:120px;">
        <div id="close-btn">X</div>
        <div class="d-grid gap-2 col-12 mx-auto bg-primary p-3 text-white fw-bold" style="font-size:20px;">
          Add City
        </div>
        <div id="modal-form">
          <table width=100%;>
          </table>
          <br> 
        </div>
      </div>
    </div>
     <!--  end  modal-->



    <?php
    include('commonpage/footer.php');
    ?>

    <!--javaScript link from bootsrap and jQuery link-->
     
    <!-- <script src="..\js\bootstrap.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
      // start show city table
      $(document).ready(function () {
        function loadTable() {
          $.ajax({
            url: 'displaycity.php',
            type: 'POST',
            success: function (data) {
              $("#display").html(data);
            }
          });
        }
        loadTable();
         // start show city table

  // start insert city table
        $('#addcity').on("click", function () {
          var cityname = $('#cityname').val();
          if (cityname == "") {
            alert("All field is required!");
          } else {
            $.ajax({
              url: 'insertcity.php',
              type: 'POST',
              data: { city_name: cityname },
              success: function (data) {
                if (data == TRUE) {
                  $('#input').trigger("reset");
                  alert(data);
                  loadTable();
                }
              }
            });
          }
        });
        // start insert city table

     // start delete button 
        $(document).on("click", "#delete-btn", function () {
          if (confirm("Do you want to really delete this city?")) {
            var cityId = $(this).data("id");
            var element = this;
            // alert(cityId);

            $.ajax({
              url: 'Deletecity.php',
              type: 'POST',
              data: { deleteid: cityId },
              success: function (data) {
                if (data == 1) {
                  $(element).closest("tr").fadeOut();

                } else {
                  alert("data can't delete");
                }
              }
            });
          }
        });
         // end delete button

        // start show modal
        $(document).on("click", "#edit-btn", function () {
          $("#modal").show();
          var editid = $(this).data("eid");

          $.ajax({
            url: 'Editcity.php',
            type: 'POST',
            data: { edit_id: editid },
            success: function (data) {
              $("#modal-form table").html(data);
            }
          });
        });
         // end show modal


        // start hide modal
        $("#close-btn").on("click", function () {
          $("#modal").hide();
        });

        $(document).on("click", "#update-btn",function(){
          var editId = $("#edit-id").val();
          var editcityid = $("#cityed").val(); 
          $.ajax({
            url: 'updatecity.php',
            type: 'POST',
            data: {id:editId, city_name:editcityid},
            success:function(data){
              if(data == 1){
                $("#modal").hide();
                loadTable();
                alert("successfully");
              }else{
                alert("not update");
              }
            }
          });
        });
        // start hide modal

      });
    </script>


  </body>

</html>