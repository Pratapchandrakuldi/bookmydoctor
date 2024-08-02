<?php

include('../connectiondatabase.php');
 
     $specialist_name=$_POST['specialistname'];
 
  $sql="INSERT INTO `specialistdetails` (`specialname`) VALUES (' $specialist_name')";
       $query=mysqli_query($conn,$sql);
       if($query==TRUE){
            echo "city save successfully";
       }else{
        echo "cant save city";
       }
 ?>