<?php
   include ('../connectiondatabase.php');

       $delete_sid=$_POST['delete_sid'];
     $sql="DELETE FROM `specialistdetails` WHERE `specialid` = '{$delete_sid}'";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>