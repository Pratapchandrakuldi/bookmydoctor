<?php
        include('../connectiondatabase.php');

         $serch_city=$_POST['serchcity'];
         $serch_loc=$_POST['serchloc'];
         $serch_special=$_POST['serchspecial']; 

// if(  $serch_city!="" && $serch_loc!=""  && $serch_special!="" &&  $serch_drname!="" ){
     


 
        $sql="SELECT d.photo,d.regid,d.drname,c.cityname,l.locname,s.specialname,d.drcontact,d.work,d.draddress,d.drcharge,d.drvshr,d.experience,d.qualification 
        FROM dr_registration AS d,citydetails AS c,locdetails AS l,specialistdetails AS s WHERE   
           s.specialid=d.reg_special  AND l.locid=d.reg_loc AND c.cityid=l.city_name 
             AND d.reg_loc='{$serch_loc}'
           AND d.reg_special='{$serch_special}' AND c.cityid='{$serch_city}'";
      $query=mysqli_query($conn,$sql);
      $output="";
       

      if(mysqli_num_rows($query)>0){
            $output .=' ';
            
            while($row=mysqli_fetch_assoc($query)){
                   
                  $output .="<tbody>
                  <tr  style='border-bottom:2px solid black;width:90%;'>
                   
                    <td style='float:left; '>  
                    <img src='../doctor/profilepic/" . $row['photo'] . "' style='width:120px;height:120px;position:relative;'/>&nbsp;&nbsp;
                    <input type='text' hidden  id='pdoctorid'  value='{$row['regid']}' > 
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


                      <td  style='float:right;text-align:left;'>
                      <ul  style='list-style-type:none;'>
                      <li>
                      {$row["draddress"]}
                      </li>
                      <li>
                      INR:{$row["drcharge"]} Rs
                      </li>
                      <li>
                      mon-sat:{$row["drvshr"]}
                      </li> 
                      <li>
                        <button class='btn btn-success' type='submit' id='appoint-btn'  data-appoint_id='{$row["regid"]}'>Make Appointment</button>&nbsp;
                        <button class='btn btn-white border border-2' type='reset' id='viewdoc-btn'  data-view_id='{$row["regid"]}'>View Details</button>
                      </li>
                      </ul>
                      </td>
                     
                  </tr>   </tbody>  ";
            }
            // $output .='';


        

            mysqli_close($conn);
            echo $output;
            
      }
    // }else{
    //   echo "Record not found";
    // }
        ?>
        
    
         


   

      