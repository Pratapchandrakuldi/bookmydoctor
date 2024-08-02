<?php
      
        include('../connectiondatabase.php');

         $galleryId=$_POST['galleryId'];  

 
     


 
        // $sql="SELECT d.photo,d.regid,d.drname,c.cityname,l.locname,s.specialname,d.drcontact,d.work,d.draddress,d.drcharge,d.drvshr,d.experience,d.qualification 
        // FROM dr_registration AS d,dr_images AS i WHERE d.regid='{$galleryId}'";

$sql = "SELECT i.imgid,i.imagefile  FROM `dr_images` AS i INNER JOIN `dr_registration` AS d WHERE d.regid = i.dr_name AND d.regid='{$galleryId}'";
      $query=mysqli_query($conn,$sql);
      $output="";
       

      if(mysqli_num_rows($query)>0){
             $output.=" 
             <tr> 
                 <td><div  style='margin:auto;float:left;'>";
            
            while($row=mysqli_fetch_assoc($query)){
                   
                  $output .="<lable>
                      <img src='../doctor/uploads/" . $row['imagefile'] . "' style='width:100px;height:100px;'/> 
                      </lable>&nbsp;&nbsp;";
            }
            $output .=' </div></td> </tr>'; 
            mysqli_close($conn);
            echo $output;
            
      }
    // }else{
    //   echo "Record not found";
    // }
        ?>
        
    
         


   

      