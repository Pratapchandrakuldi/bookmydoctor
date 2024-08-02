<?php
      include('../connectiondatabase.php');

      
      $sercityid =$_POST['sercityid'];
      
            $sql="SELECT * FROM  locdetails WHERE  city_name = '$sercityid'";
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