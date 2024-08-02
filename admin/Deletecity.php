<?php
   include ('../connectiondatabase.php');

       $cityid=$_POST['deleteid'];
     $sql="DELETE FROM `citydetails` WHERE `cityid` = {$cityid}";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>