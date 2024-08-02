<?php
session_start();
include('../connectiondatabase.php');
if (isset($_POST['oldpass']) && isset($_POST['newpass']) && isset($_POST['confirmpass'])) {

    
    
    $username=$_SESSION['adminname']; 
    $sql="SELECT * FROM `adminlogin` WHERE `username`='$username'";
    $query=mysqli_query($conn,$sql) or die("query failed");
    
    
      
    $row = mysqli_fetch_assoc($query);
      $user_password=$row['password']; 
      $user_id =$row['userid'];
       
   

               $old_pass = $_POST['oldpass'];
                $new_pass = $_POST['newpass'];
                $confirm_pass = $_POST['confirmpass'];

            if($old_pass==$user_password){
                if($new_pass==$confirm_pass){
                    $sql = "UPDATE `adminlogin` SET  `password`='{$new_pass}' WHERE `userid` ='{$user_id}'";
                    $query = mysqli_query($conn, $sql) or die("connection failed");
                    if ($query == TRUE) {
                        echo "Password has been changed successfully..";
                    } else {
                        echo "Changed password failed";
                    }
                }else{
                    echo"New password and Confirm password  are not matched!"; 
                }
            }else{
                echo"Old password is Invalid!";
            }
 
    
}

 


?>