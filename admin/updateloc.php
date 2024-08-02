<?php
include ('../connectiondatabase.php');
if(isset($_POST['loc_name'])){
       $locationId=$_POST['id'];
       $locationname=$_POST['loc_name'];
       $locationcity=$_POST['cid'];
            

     $sql="UPDATE locdetails SET  locname ='{$locationname}',city_name=' $locationcity' WHERE locid='{$locationId}'";
     $query=mysqli_query($conn,$sql) or die("connection failed");
     if($query==TRUE){
      echo 1;
     }else{
      echo 0;
     }
    }


?>