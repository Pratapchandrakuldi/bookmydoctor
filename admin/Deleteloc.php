<?php
   include ('../connectiondatabase.php');

       $locid=$_POST['deleteId'];
     $sql="DELETE FROM `locdetails` WHERE `locid` = {$locid}";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>