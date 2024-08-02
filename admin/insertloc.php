<?php

include('../connectiondatabase.php');

 
     $location = $_POST['loc_name'];
     $city_name = $_POST['loccity_name'];

     $sql = "INSERT INTO locdetails (locname,city_name) VALUES ('$location','$city_name')";
     $query = mysqli_query($conn, $sql);
     if ($query == TRUE) {
          echo "city save successfully";
     } else {
          echo "cant save city";
     }
 
?>