<?php
   include ('../connectiondatabase.php');

       $deleteimgId=$_POST['deleteimgId'];
     $sql="DELETE FROM `dr_images` WHERE `imgid` = {$deleteimgId}";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>