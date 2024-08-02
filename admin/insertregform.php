<?php

include('../connectiondatabase.php');
 
      $regdate=$_POST['regdate'];
      $regcity=$_POST['regcity']; 
      $regloc=$_POST['regloc'];
      $regspecial=$_POST['regspecial'];
      $drname=$_POST['drname'];
      $qualify=$_POST['qualify'];
      $experience=$_POST['experience'];
      $job=$_POST['job'];
      $about=$_POST['about'];
      $address=$_POST['address'];
      $drcontact=$_POST['drcontact'];
      $vshour=$_POST['vshour'];
      $drcharge=$_POST['drcharge'];
      $dremail=$_POST['dremail'];
      $drpassword=$_POST['drpassword'];
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
       
        

     if($regdate==""||$regcity==""||$regloc==""||$regspecial==""||$drname==""||$qualify==""||$experience==""||$job==""||
          $about==""||$address==""||$drcontact==""||$vshour==""||$drcharge==""||$dremail==""||$drpassword==""||$fmon==""||
          $tmon==""||$ftue==""||$ttue==""||$fwed==""||$twed==""||$fthur==""||$tthur==""||$ffri==""||$tfri==""||$fsat==""||$tsat==""){
          echo "All field is required";
     }elseif ($drpassword!=$_POST['drcpassword']) {
           echo "Could not matched with entered password!";
     }else{

     
  $sql="INSERT INTO dr_registration (regdate,reg_city,reg_loc,reg_special,drname,qualification,experience,work,drabout,draddress,
  drcontact,drvshr,drcharge,dremail,drpassword,fmon,tmon,ftue,ttue,fwed,twed,fthur,tthur,ffri,tfri,fsat,tsat)
   VALUES ('$regdate',$regcity,$regloc,$regspecial,'$drname','$qualify','$experience','$job','$about','$address','$drcontact','$vshour', '$drcharge','$dremail','$drpassword', '$fmon',
   '$tmon','$ftue', '$ttue', '$fwed','$twed','$fthur','$tthur','$ffri','$tfri','$fsat','$tsat')";
       $query=mysqli_query($conn,$sql);
       if($query==TRUE){
            echo "Registration completed successfully";
       }else{
        echo "Registration failed!";
       }
     }
 ?>