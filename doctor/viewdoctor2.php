<?php
session_start();
include('../connectiondatabase.php');

$logid= $_SESSION['doctorid'];

$sql = "SELECT d.photo,d.regdate,d.regid,d.qualification,d.experience,d.work,d.drabout,d.draddress,d.drcontact,d.drname,c.cityname,l.locname,s.specialname,d.drcharge,d.drvshr,d.dremail 
      FROM dr_registration AS d,citydetails AS c,locdetails AS l,specialistdetails AS s WHERE   
         s.specialid=d.reg_special  AND l.locid=d.reg_loc AND c.cityid=l.city_name 
         AND d.regid='{$logid}'";
$query = mysqli_query($conn, $sql);
$output = "";

if (mysqli_num_rows($query) > 0) {
    $output .= "";

    $slno = 0;
    while ($row = mysqli_fetch_assoc($query)) {
        $slno++;
        $output .= "<tbody>
     <tr style='padding:10px;'>
     <th style='padding:10px;'>
          Profile Picture:
    </th>
    <td style='padding:10px;'></td>
    <td style='padding:10px;'></td>
    <td style='padding:auto;text-align:left;'>
    <img src='../doctor/profilepic/".$row['photo']."' style='width:100px;height:100px;border:1px solid black;'/>
    </td>   
  </tr>
                  <tr style='padding:10px;'>
                     <th style='padding:10px;'>
                        Registration Date:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['regdate']}  
                    </td>   
                  </tr>
                  <tr style='padding:10px;'>
                     <th style='padding:10px;'>
                        City name:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['cityname']}  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Location name:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['locname']}  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Specialist:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['specialname']}  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Dr. Name:
                    </th>
                    <td style='padding:10px;''></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['drname']}  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Qualification:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['qualification']}  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Experience:
                    </th style='padding:5px;'>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['experience']}  
                    </td>   
                  </tr> 
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Job/Private:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['work']}  
                    </td>   
                  </tr>
                  <tr style='padding:20px;'>
                     <th style='padding:5px;'>
                        About:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['drabout']}  
                    </td>   
                  </tr>
                  <tr style='padding:10px;'>
                     <th style='padding:5px;'>
                        Address:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['draddress']}  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Contact Number:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['drcontact']}  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Visiting Hours:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['drvshr']}  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        Consulting Charge:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['drcharge']}  
                    </td>   
                  </tr>
                  <tr style='padding:5px;'>
                     <th style='padding:5px;'>
                        EmailId:
                    </th>
                    <td style='padding:10px;'></td>
                    <td style='padding:10px;'></td>
                    <td style='padding:5px;text-align:left;'>
                        {$row['dremail']}  
                    </td>   
                  </tr> ";


    }
    $output .= "</tbody> ";
    mysqli_close($conn);
    echo $output;
}

?>