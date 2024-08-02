<?php
   include ('../connectiondatabase.php');

       $delete_pid=$_POST['deletepid'];
     $sql="DELETE FROM `patientdetails` WHERE `pat_id` = {$delete_pid}";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>