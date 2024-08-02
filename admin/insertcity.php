 <?php

include('../connectiondatabase.php');
 
     $cityname=$_POST['city_name'];
 
  $sql="INSERT INTO `citydetails` (`cityname`) VALUES ('$cityname')";
       $query=mysqli_query($conn,$sql);
       if($query==TRUE){
            echo "city save successfully";
       }else{
        echo "cant save city";
       }
 ?>