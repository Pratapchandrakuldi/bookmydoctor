<?php
session_start();
include('../connectiondatabase.php');

              // 
              $array=array("jpg","jpeg","png","gif");

              $logid= $_SESSION['doctorid'];
          if(!empty($_FILES['file2'])){
               
               // alert($logid);
               //name :get the file name
               $fname = $_FILES['file2']['name'];
               //tmp location  nam get 
               $temp = $_FILES['file2']['tmp_name'];
               $file_extension=pathinfo("profilepic/".$fname,PATHINFO_EXTENSION);
               if(in_array($file_extension,$array)){
                    if(move_uploaded_file($temp,"profilepic/".$fname)){
                         $sql ="UPDATE  dr_registration SET photo='$fname' WHERE  regid='$logid'";
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