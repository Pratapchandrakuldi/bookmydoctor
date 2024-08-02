<?php
  session_start();
  include ('../connectiondatabase.php');
  if(isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `adminlogin` WHERE `username`='$username' AND `password`='$password'";
    $query=mysqli_query($conn,$sql) or die("query failed");
    
    if(mysqli_num_rows($query)>0){
      
       while($row = mysqli_fetch_assoc($query)){
      $_SESSION['adminname']=$row['username'];
      $_SESSION['adminpassword']=$row['password']; 
      echo "Login successfully...";
       exit;
       }  
    }else{
      echo "Failed to login..";
    }
  }


?>