<?php
session_start();
include('../connectiondatabase.php');
if (isset($_POST['old_pass']) && isset($_POST['new_pass']) && isset($_POST['confirm_pass'])) {

    
    
    $username=$_SESSION['doctorname']; 
    $sql="SELECT * FROM `dr_registration` WHERE `drname`='$username'";
    $query=mysqli_query($conn,$sql) or die("query failed");
    
    
      
    $row = mysqli_fetch_assoc($query);
      $user_password=$row['drpassword']; 
      $user_id =$row['regid'];
       
   

               $oldpass = $_POST['old_pass'];
                $newpass = $_POST['new_pass'];
                $confirmpass = $_POST['confirm_pass'];

            if($oldpass==$user_password){
                if($newpass==$confirmpass){
                    $sql = "UPDATE `dr_registration` SET  `drpassword`='{$newpass}' WHERE `regid` ='{$user_id}'";
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