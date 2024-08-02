<?php
      include('../connectiondatabase.php');

      $serlocid =$_POST['serloc_id'];
      
      $sql="SELECT   s.specialname,s.specialid FROM  dr_registration AS d,specialistdetails AS s,locdetails AS l   WHERE  d.reg_loc=$serlocid  AND s.specialid=d.reg_special  AND l.locid=d.reg_loc";
      $query=mysqli_query($conn,$sql);
      // $output="";

      if(mysqli_num_rows($query)>0){
            
            
            while($row=mysqli_fetch_assoc($query)){
                  
                  $output .="<option value='{$row["specialid"]}'>{$row['specialname']}</option>";
            }
             
            mysqli_close($conn);
            echo $output;
        }
       
?>