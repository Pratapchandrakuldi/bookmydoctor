<?php
  session_start();
  include ('../connectiondatabase.php');
  if(isset($_POST['dusername']) && isset($_POST['dpassword'])){
    $dusername=$_POST['dusername'];
    $dpassword=$_POST['dpassword'];
    $sql="SELECT `regid`,`drname`,`drpassword` FROM `dr_registration` WHERE `drname`='$dusername' AND `drpassword`='$dpassword'";
    $query=mysqli_query($conn,$sql) or die("query failed");
    
    if(mysqli_num_rows($query)>0){
      
       while($row = mysqli_fetch_assoc($query)){
      $_SESSION['doctorname']=$row['drname'];
      $_SESSION['doctorid']= $row['regid'];
      echo "login successful";
       exit;
       }  
    }else{
      echo "failed to login";
    }
  }


?>