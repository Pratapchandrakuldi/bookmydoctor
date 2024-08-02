<?php
 session_start();
include('../connectiondatabase.php');


       
 
     //  $doctor_id=$_POST['doctor_id'];
     $doctor_id=$_SESSION['doctorappointid'];
      $p_name=$_POST['p_name']; 
      $p_contact=$_POST['p_contact'];
      $p_email=$_POST['p_email'];
      $p_city=$_POST['p_city'];
      $p_address=$_POST['p_address'];
      $p_date=$_POST['p_date'];
      $p_time=$_POST['p_time'];
      $p_remark=$_POST['p_remark']; 
        
       
        

     if($p_name==""||$p_contact==""||$p_email==""||$p_city==""||$p_address==""||$p_date==""||$p_time==""||$p_remark==""){
          echo "All field is required";
     }else if(isset($doctor_id)){

     
  $sql="INSERT INTO patientdetails (patname,patcontact,patemail,patcity,pataddress,patdate,pattime,patremark,pat_drname)
   VALUES ('$p_name','$p_contact','$p_email','$p_city','$p_address','$p_date','$p_time','$p_remark',$doctor_id)";
       $query=mysqli_query($conn,$sql);
       if($query==TRUE){
            echo "Registration completed successfully";
       }else{
        echo "Registration failed!";
       }
     }
 ?>