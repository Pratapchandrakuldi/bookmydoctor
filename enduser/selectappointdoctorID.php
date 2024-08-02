<?php
  session_start();
  include ('../connectiondatabase.php');
  if(isset($_POST['appointid'])){
    $doctornameid=$_POST['appointid']; 
    $sql="SELECT * FROM `dr_registration` WHERE `regid`='$doctornameid'";
    $query=mysqli_query($conn,$sql) or die("query failed");
    
    if(mysqli_num_rows($query)>0){
      
       while($row = mysqli_fetch_assoc($query)){
      $_SESSION['doctorappointid']=$row['regid'];  
       exit;
       }  
    } 
  }


?>