<?php
   include ('../connectiondatabase.php');

       $imageid=$_POST['deleteid'];
     $sql="DELETE FROM `dr_images` WHERE `imgid` = {$imageid}";
     $query=mysqli_query($conn,$sql);
     if($query){
      echo 1;
     }else{
      echo 0;
     }
?>