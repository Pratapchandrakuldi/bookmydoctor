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
        style="width:800px;margin:auto;height:250px;background-color:lightgreen;margin-top:10px;">
        <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
          Add Location
        </div>
        <br>
        
        <div class="col-sm-10 mx-auto">

          <select class="form-control  border border-2 border-success" id="choosecity">
            <option  value="">--Please select City--</option>

          </select>
        </div>
        <br>
         
        <div class="col-sm-10 mx-auto">
          <input type="text" class="form-control border border-2 border-success" placeholder="Location name"
            id="location">
          <!-- <span id="Availability"></span> -->
        </div>
        <br>
        <form>
        <div class="d-grid gap-2 d-md-flex col-3  mx-auto ">
          <button class="btn btn-primary me-md-2" id="addloc" type="submit">ADD</button>
          <button class="btn btn-primary" type="reset">RESET</button>
        </div>
        </form>
      </div>
      <!--end add city table-->

      <!--start city table-->
      <div class="mb-3 text-center border border-2 border-dark my-2"
        style="width:800px;margin:auto;height:auto;background-color:lightgreen;">
        <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
          Location List
        </div>
        <div id="disloc"></div>


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
        <br>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
      $(document).ready(function () {
        //dropdown list of city
        function loadData() {
          $.ajax({
            url: 'selectcity.php',
            type: 'POST',
            success: function (data) {
              $("#choosecity").append(data);
            }
          });
        }
        loadData();
        // end dropdown list of city

        //show city and location  table

        function loadTable() {
          $.ajax({
            url: 'displayloc.php',
            type: 'POST',
            success: function (data) {
              $("#disloc").html(data);
            }
          });
        }
        loadTable();
        // end show city and location table

        // start insert city and location
              function cityname(){ 
        $('#choosecity').on("change", function (e) {
          e.preventDefault(); 
            let dropcity = $(this).val(); 
        $('#addloc').on("click", function () { 
            var locname = $('#location').val(); 
              $.ajax({
                url: 'insertloc.php',
                type: 'POST',
                data: {loccity_name: dropcity, 
                           loc_name: locname },
                success: function (data) { 
                  if(data==TRUE)
                  $('#input').trigger("reset");
                  alert(data);
                  loadTable();
                }
              }); 
        });
      });
        }
        cityname(); 
        // end insert city and location

        // start delete button 
        $(document).on("click", "#delloc-btn", function () {
          if (confirm ("Do you want to really delete this city?")) {
            var locId = $(this).data("dlid");
            var element = this;
            // alert(locId);

            $.ajax({
              url: 'Deleteloc.php',
              type: 'POST',
              data: { deleteId: locId },
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
        $(document).on("click", "#loc-btn", function () {
          $("#modal").show();
          var editlocid = $(this).data("lid"); 
          $.ajax({
            url: 'Editloc.php',
            type: 'POST',
            data: { editloc_id: editlocid },
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

        $(document).on("click", "#updateloc-btn",function(){
          var edit_Id = $("#edloc-id").val();
          var editloc_id = $("#locationid").val();
          var edloccity_id = $("#chosecity").val(); 
          $.ajax({
            url: 'updateloc.php',
            type: 'POST',
            data: {id:edit_Id, loc_name:editloc_id,cid:edloccity_id},
            success:function(data){
              if(data == 1){
                $("#modal").hide();
                loadTable();
                alert("successfully updated");
              }else{
                alert("Failed to update");
              }
            }
          });
        });
        // start hide modal


      });


    </script>

  </body>

</html>