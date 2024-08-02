<?php
      include('../connectiondatabase.php');

      
      $regcityid =$_POST['regcity_id'];
      
            $sql="SELECT * FROM  locdetails WHERE  city_name=$regcityid";
      $query=mysqli_query($conn,$sql);
    //   $output="";

      if(mysqli_num_rows($query)>0){
            
            
            while($row=mysqli_fetch_assoc($query)){
                  
                  $output .="<option value='{$row["locid"]}'>{$row['locname']}</option>";
            }
             
            mysqli_close($conn);
            echo $output;
        }
      
       
      
?>