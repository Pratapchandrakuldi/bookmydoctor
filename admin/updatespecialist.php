<?php
include ('../connectiondatabase.php');
if(isset($_POST['special_name'])){
       $specialId=$_POST['id'];
       $specialistname=$_POST['special_name'];
            

     $sql="UPDATE specialistdetails SET  specialname ='{$specialistname}' WHERE specialid='{$specialId}'";
     $query=mysqli_query($conn,$sql) or die("connection failed");
     if($query==TRUE){
      echo 1;
     }else{
      echo 0;
     }
    }


?>