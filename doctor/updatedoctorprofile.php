<?php
session_start();
include ('../connectiondatabase.php');
if(isset($_POST['reg_edrname'])){
    $logid= $_SESSION['doctorid'];
       $reg_edate=$_POST['reg_edate'];
       $reg_ecity=$_POST['reg_ecity'];
       $reg_eloc=$_POST['reg_eloc'];
       $reg_especial=$_POST['reg_especial'];
       $reg_edrname=$_POST['reg_edrname'];
       $reg_equalification=$_POST['reg_equalification'];
       $reg_eexperience=$_POST['reg_eexperience'];
       $reg_ework=$_POST['reg_ework'];
       $reg_edrabout=$_POST['reg_edrabout'];
       $reg_edraddress=$_POST['reg_edraddress'];
       $reg_edrcontact=$_POST['reg_edrcontact'];
       $reg_edrvshr=$_POST['reg_edrvshr'];
       $reg_edrcharge=$_POST['reg_edrcharge'];
       $reg_edremail=$_POST['reg_edremail']; 
            

     $sql="UPDATE  dr_registration AS d,citydetails AS c,locdetails AS l,specialistdetails AS s SET  d.regdate ='{$reg_edate}',c.cityname='{$reg_ecity}',l.locname ='{$reg_eloc}',s.specialname ='{$reg_especial}',d.drname ='{$reg_edrname}',
     d.qualification ='{$reg_edate}',d.experience ='{$reg_eexperience}',d.work ='{$reg_ework}',d.drabout ='{$reg_edrabout}',d.draddress ='{$reg_edraddress}',
     d.drcontact ='{$reg_edrcontact}',d.drvshr ='{$reg_edrvshr}',d.drcharge ='{$reg_edrcharge}',d.dremail ='{$reg_edremail}'  WHERE regid='{$logid}' AND  s.specialid=d.reg_special  AND l.locid=d.reg_loc AND c.cityid=l.city_name";
     $query=mysqli_query($conn,$sql) or die("connection failed");
     if($query==TRUE){
      echo 1;
     }else{
      echo 0;
     }
    }

    
?>