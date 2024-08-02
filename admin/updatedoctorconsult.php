<?php
include ('../connectiondatabase.php');
if(isset($_POST['tsat'])){
       $reg_Id=$_POST['id'];
       $fmon=$_POST['fmon'];
       $tmon=$_POST['tmon'];
       $ftue=$_POST['ftue'];
       $ttue=$_POST['ttue'];
       $fwed=$_POST['fwed'];
       $twed=$_POST['twed'];
       $fthur=$_POST['fthur'];
       $tthur=$_POST['tthur'];
       $ffri=$_POST['ffri'];
       $tfri=$_POST['tfri'];
       $fsat=$_POST['fsat'];
       $tsat=$_POST['tsat'];
            

       $sql="UPDATE  dr_registration SET fmon='{$fmon}',tmon='{$tmon}',ftue='{$ftue}',ttue='{$ttue}',fwed='{$fwed}',twed='{$twed}',fthur='{$fthur}',tthur='{$tthur}',ffri='{$ffri}',tfri='{$tfri}',fsat='{$fsat}',tsat='{$tsat}'   WHERE regid='{$reg_Id}'";
     $query=mysqli_query($conn,$sql) or die("connection failed");
     if($query==TRUE){
      echo 1;
     }else{
      echo 0;
     }
    }


?>