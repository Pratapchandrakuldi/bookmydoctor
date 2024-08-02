<?php
    session_start();
      include('../connectiondatabase.php');
      
 
      if (isset($_SESSION['doctorname']) && isset($_SESSION['doctorid'])) { 


      $logid= $_SESSION['doctorid']; 



      $sql="SELECT d.drname,d.experience,d.drcontact,d.drvshr,s.specialname FROM dr_registration AS d,specialistdetails AS s  WHERE d.regid='{$logid}' AND  s.specialid=d.reg_special";
      $query=mysqli_query($conn,$sql);
      $output="";

      if(mysqli_num_rows($query)>0){
        $output.="<div class='mb-3 text-center border border-0 border-dark'
        style='width:100%;margin:auto;height:auto;background-color:none;'  id='onlinedoc'>
        <div class='d-grid gap-2 col-12 mx-auto bg-primary p-2 text-white' style='font-size:30px;font-weight:bold;'>
            Talk To Online Doctor's
        </div>
    </div>
        <table class='table caption-top text-dark'> 
        <tr>  <td><div style='width:250px;height:200px;text-align:left;padding-left:10px;margin:auto;background-color:lightgrey;'>";

            while($row=mysqli_fetch_assoc($query)){ 
                   
                $output.="<lable> 
                  
                  <p style='color:Darkgreen;'><b>{$row['drname']}</b></p>
                  <p>{$row['specialname']}</p>
                  <p>{$row['experience']}</p>
                  <p>{$row['drcontact']}</p> 
                  Monday  ({$row['drvshr']})
                    </lable>";
            }
            $output.="</div></td></tr></table>  ";
            mysqli_close($conn);
            echo $output;
      }
    }
    ?>
