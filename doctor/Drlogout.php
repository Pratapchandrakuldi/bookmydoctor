<?php
    session_start();
    include ('../connectiondatabase.php');
    if(isset($_SESSION['doctorname']) && isset( $_SESSION['doctorid'])){ 
        session_unset();
     session_destroy();
    header('location:Doctorlogin.php');
         
       }
      
    
    


?>