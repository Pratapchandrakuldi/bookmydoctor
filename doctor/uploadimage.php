<?php
session_start();
include('../connectiondatabase.php');

              // 
              $array=array("jpg","jpeg","png","gif");

              $logid= $_SESSION['doctorid'];
          if(!empty($_FILES['file'])){
               
               // alert($logid);
               //name :get the file name
               $fname = $_FILES['file']['name'];
               //tmp location  nam get 
               $temp = $_FILES['file']['tmp_name'];
               $file_extension=pathinfo("uploads/".$fname,PATHINFO_EXTENSION);
               if(in_array($file_extension,$array)){
                    if(move_uploaded_file($temp,"uploads/".$fname)){
                         $sql ="INSERT INTO dr_images (imagefile,dr_name) VALUES ('$fname','$logid')";
                         $query=mysqli_query($conn,$sql);
                         if($query){
                              echo "Successfully uploaded";
                         }
                    }
               }else{
                    echo"Not uploaded...";
               }
                
          }else{
               echo "Error";
          }







     


  
 ?>