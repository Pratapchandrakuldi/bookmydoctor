<?php
      include('../connectiondatabase.php');


      $sql="SELECT * FROM citydetails";
      $query=mysqli_query($conn,$sql);
      $output="";

      if(mysqli_num_rows($query)>0){
            
            
            while($row=mysqli_fetch_assoc($query)){
                  
                  $output.=" <option value='{$row["cityid"]}'>{$row['cityname']}</option>";
            }
             
            mysqli_close($conn);
            echo $output;
      }

?>