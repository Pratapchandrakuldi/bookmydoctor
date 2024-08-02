<?php
      include('../connectiondatabase.php');

      
      $serspecialid =$_POST['serspecial_id'];
      
            $sql="SELECT d.regid,d.drname FROM  dr_registration AS d,specialistdetails AS s WHERE  reg_special=$serspecialid AND s.specialid=d.reg_special ";
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