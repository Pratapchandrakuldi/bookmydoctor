<?php
include ('../connectiondatabase.php');
if(isset($_POST['city_name'])){
       $cityId=$_POST['id'];
       $cityname=$_POST['city_name'];
            

     $sql="UPDATE citydetails SET  cityname ='{$cityname}' WHERE cityid='{$cityId}'";
     $query=mysqli_query($conn,$sql) or die("connection failed");
     if($query==TRUE){
      echo 1;
     }else{
      echo 0;
     }
    }


?>