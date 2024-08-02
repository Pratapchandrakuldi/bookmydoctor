<?php
    session_start();
    include ('../connectiondatabase.php');
    if (isset($_SESSION['adminname'])) {
        session_unset();
        session_destroy();
       header('location:adminlogin.php');
      }
      
    
    


?>