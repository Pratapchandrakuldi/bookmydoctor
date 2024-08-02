<?php
      include('../connectiondatabase.php');

      
      
      
            $sql="SELECT regid,drname FROM  dr_registration ";
      $query=mysqli_query($conn,$sql);
    //   $output="";

      if(mysqli_num_rows($query)>0){
            
            
            while($row=mysqli_fetch_assoc($query)){
                  
                  $output .="<option value='{$row["regid"]}'>{$row['drname']}</option>";
            }
             
            mysqli_close($conn);
            echo $output;
        }
      
       
      
?>