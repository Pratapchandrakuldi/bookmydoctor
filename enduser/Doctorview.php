<?php
          session_start();
        include('../connectiondatabase.php');

         $viewId=$_POST['viewId'];  
           
 
     


 
        $sql="SELECT d.photo,d.regid,d.drname,c.cityname,l.locname,s.specialname,d.drcontact,d.work,d.draddress,d.drcharge,d.drvshr,d.experience,d.qualification 
        FROM dr_registration AS d,citydetails AS c,locdetails AS l,specialistdetails AS s WHERE   
           s.specialid=d.reg_special  AND l.locid=d.reg_loc AND c.cityid=l.city_name 
             AND  d.regid='{$viewId}'";
      $query=mysqli_query($conn,$sql);
      $output="";
       

      if(mysqli_num_rows($query)>0){
            $output .=' ';
            
            while($row=mysqli_fetch_assoc($query)){
                   
                  $output .="<tbody>
                  <tr  style='border-bottom:2px solid black;width:100%;'>
                   
                    <td style='float:left; '>  
                    <img src='../doctor/profilepic/" . $row['photo'] . "' style='width:120px;height:120px;position:relative;'/>&nbsp;&nbsp;
                      
                       </td>
                      <td style='text-align:left;float:left;'>
                      <ul style='list-style-type:none;'><li>
                      <span style='color:lightgreen;'> 
                    <b>{$row["drname"]}</b> 
                    </span>
                     </li>
                     <li>
                    {$row["specialname"]}
                    </li>
                    <li> 
                    {$row["experience"]} Experience
                    </li> 
                    <li> 
                    {$row["work"]} 
                      </li>
                      <li> 
                    {$row["qualification"]} 
                      </li>
                      </ul>
                      </td> 
                  </tr> 
                  <tr  style='float:left;padding-left:10px;'>
                  <td  style='float:left;padding-left:10px;border:0px;'>
                  <button  id='about'   data-about_id='{$row["regid"]}' style='border:none;background-color:white;'>About</button>
                   
                  </td>
                  <td  style='float:left;padding-left:10px;border:0px;'>
                  <button  id='Imagegallery'   data-gallery_id='{$row["regid"]}' style='border:none;background-color:white;'>Image Gallery</button>
                  </td>
                  </tr>  
                  </tbody>  ";
            }
            // $output .='';


        

            mysqli_close($conn);
            echo $output;
            
      }
    // }else{
    //   echo "Record not found";
    // }
        ?>
        
    
         


   

      