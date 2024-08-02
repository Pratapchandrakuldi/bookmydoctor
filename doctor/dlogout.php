<?php
    session_start();
    include ('../connectiondatabase.php');
     session_unset();
     session_destroy();
     header('location:Doctorlogin.php');
    
    


?>