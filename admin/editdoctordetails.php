<?php
      include('../connectiondatabase.php');

      $edit_id=$_POST['edit_id'];

      $sql="SELECT d.regdate,d.regid,d.qualification,d.experience,d.work,d.drabout,d.draddress,d.drcontact,d.drname,c.cityname,l.locname,s.specialname,d.drcharge,d.drvshr,d.dremail,d.drpassword 
      FROM dr_registration AS d,citydetails AS c,locdetails AS l,specialistdetails AS s WHERE   
         s.specialid=d.reg_special  AND l.locid=d.reg_loc AND c.cityid=l.city_name 
         AND d.regid='{$edit_id}'";
      $query=mysqli_query($conn,$sql);
      $output="";

      if(mysqli_num_rows($query)>0){
            $output.=""; 
             
            $slno=0;
            while($row=mysqli_fetch_assoc($query)){
                  $slno++;
     $output.="<tbody>
                  <tr style='padding:10px;'>
                     <th style='padding:10px;'>
                        Registration Date:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'  
                     id='reg_edate' value='{$row['regdate']}'>
                               <input type='text'  hidden  id='reg_eid' value='{$row['regid']}'> 
                    </td>   
                  </tr>
                  <tr style='padding:10px;'>
                     <th style='padding:10px;'>
                        City name:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'  
                    id='reg_ecity' value='{$row['cityname']} '>  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Location name:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'   
                    id='reg_eloc' value='{$row['locname']} '>  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Specialist:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'  
                    id='reg_especial' value='{$row['specialname']} '>  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Dr. Name:
                    </th>
                    <td style='padding:10px;''></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'  
                    id='reg_edrname' value='{$row['drname']} '> 
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Qualification:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'  
                    id='reg_equalification' value='{$row['qualification']} '>  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Experience:
                    </th style='padding:5px;'>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'   
                    id='reg_eexperience' value='{$row['experience']} '>  
                    </td>   
                  </tr> 
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Job/Private:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'  
                    id='reg_ework' value='{$row['work']} '>  
                    </td>   
                  </tr>
                  <tr style='padding:20px;'>
                     <th style='padding:5px;'>
                        About:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;text-align:left;'>
                    <div>
                    <textArea     class='form-control border border-2 border-success my-4'
                    id='reg_edrabout'>{$row['drabout']}</textArea> 
                    </div> 
                    </td>   
                  </tr>
                  <tr style='padding:10px;'>
                     <th style='padding:5px;'>
                        Address:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;text-align:left;'>
                    <div>
                    <textArea      class='form-control border border-2 border-success my-4'
                    id='reg_edraddress'>{$row['draddress']}</textArea>
                    </div>  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Contact Number:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'   
                    id='reg_edrcontact' value='{$row['drcontact']}'> 
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Visiting Hours:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'  
                    id='reg_edrvshr' value='{$row['drvshr']}'> 
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Consulting Charge:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'  
                    id='reg_edrcharge' value='{$row['drcharge']} '> 
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        EmailId:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'   
                    id='reg_edremail' value='{$row['dremail']} '>  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Password:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'   
                    id='reg_epassword' value='{$row['drpassword']} '>  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Confirm Password:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                    <input type='text' class='form-control border border-2 border-success my-4'   
                    id='reg_edremail' value='{$row['drpassword']} '>  
                    </td>   
                  </tr>";
                  
                  
            }
            $output.="</tbody> ";
            mysqli_close($conn);
            echo $output;
      }

?>
 