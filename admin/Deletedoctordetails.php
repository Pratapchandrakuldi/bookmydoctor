<?php
   include ('../connectiondatabase.php');

       $deleteregId=$_POST['deleteregId'];
     $sql="DELETE FROM `dr_registration` WHERE `regid` = {$deleteregId}";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>