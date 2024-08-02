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
        <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
          Add Images
        </div>
        <br>
     

        <br>
        <form id="myform" method="post">
        <div class="col-sm-5 mx-auto">
          <span id="Availability">Upload image:</span><br>
          <input type="file" class="form-control border border-2 border-success" id="file"  name="file">
          <!-- <span id="Availability"></span> -->
        </div>
        <br>
         
          <div class="d-grid gap-2 d-md-flex col-2  mx-auto ">
            <button class="btn btn-primary me-md-2" id="addimage" type="submit" name="addimage">Add image</button>
          </div>
        </form>
      </div>
      <!--end add image table-->

      <!--start dr image table-->
      <div class="mb-3 text-center border border-2 border-dark my-2"
        style="width:90%;margin:auto;height:auto;background-color:white;">
        <div class="d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white">
          Added Pictures
        </div>
        <div >
        <table class='table caption-top text-dark'>
        <tbody id="disimage">
                  <!-- <tr id="disimage">
        </tr>  -->
      </tbody>
        </table>

        </div>


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

      <!-- end dr image table-->



    </div>


    <?php
    include('commonpage/footer.php');
    ?> 
 



    <!--javaScript link from bootsrap and jQuery link-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
       <script>
           $(document).ready(function(){
                $("form").on('submit',function(){
                  
                     
                   $.ajax({
                    url:'uploadimage.php',
                    method:'POST',
                    data:new FormData(this),
                    contentType:false,//the browser will automatically encode the form data 
                    cache:false, 
                    processData:false,
                    success:function(data){
                      if(data==TRUE){
                             alert(data);
                            //  $('#input').trigger("reset");
                             $('#file').val('');
                             ImageData();
                            // console.log(data);
                      } 
                      }
                   });
                });


              function ImageData(){  
                  $.ajax({
                    url:'displaydr_image.php',
                    method:'POST',
                    // data:new FormData(this),
                    // contentType:false,//the browser will automatically encode the form data 
                    // cache:false, 
                    // processData:false,
                    success:function(data){ 
                      $('#disimage').html(data); 
                      }
                   }); 
                 
              }
              ImageData();


              $("#file").on('change',function(){
                ImageData();
              }); 
               

               // start delete button 
        $(document).on("click", "#delete-btn", function () {
          if (confirm("Do you want to really delete this city?")) {
            var dr_img = $(this).data("did");
            var element = this;
            // alert(cityId);

            $.ajax({
              url: 'Deleteimage.php',
              type: 'POST',
              data: { deleteid: dr_img },
              success: function (data) {
                if (data == 1) {
                  ImageData();
                  $(element).closest("tr").fadeOut();

                } else {
                  alert("data can't delete");
                }
              }
            });
          }
        });
         // end delete button








 
           });
        </script>



  </body>

</html>