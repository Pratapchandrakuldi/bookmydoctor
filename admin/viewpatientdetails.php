<?php
include('../connectiondatabase.php');

$viewid = $_POST['view_id'];


$sql="SELECT p.patname,p.patcontact,p.patdate,p.pattime,p.pat_id,p.patremark,p.patemail,p.pataddress,d.drname FROM patientdetails As p,dr_registration AS d WHERE d.regid=p.pat_drname AND  p.pat_id='{$viewid}' ";
$query = mysqli_query($conn, $sql);
$output = "";

if (mysqli_num_rows($query) > 0) {
    $output .= "";

    $slno = 0;
    while ($row = mysqli_fetch_assoc($query)) {
        $slno++;
        $output .= "<tbody>
      
                  <tr >
                     <th style='padding:10px;width:400px;text-align:right;'>
                        Appointment Date:
                    </th> 
                    <td style='padding:10px;width:400px;text-align:left;'>
                         {$row['patdate']}   
                    </td>   
                  </tr>
                  <tr>
                     <th style='padding:10px;width:400px;text-align:right;'>
                        Appointment Time:
                    </th> 
                    <td style='padding:10px;width:400px;text-align:left;'>
                          {$row['pattime']}    
                    </td>   
                  </tr>
                  <tr>
                     <th style='padding:10px;width:400px;text-align:right;'>
                        Patient Name:
                    </th> 
                    <td style='padding:10px;width:400px;text-align:left;'>
                    {$row['patname']}
                    </td>   
                  </tr>
                  <tr>
                     <th style='padding:10px;width:400px;text-align:right;'>
                        Patient Contact No:
                    </th> 
                    <td style='padding:10px;width:400px;text-align:left;'>
                    {$row['patcontact']} 
                    </td>   
                  </tr>
                  <tr >
                     <th style='padding:10px;width:400px;text-align:right;'>
                        Patient Email:
                    </th style='padding:5px;'> 
                    <td style='padding:10px;width:400px;text-align:left;'>
                        {$row['patemail']}  
                    </td>   
                  </tr> 
                  <tr >
                     <th style='padding:10px;width:400px;text-align:right;'>
                        Patient Address:
                    </th>
                    
                    <td style='padding:10px;width:400px;text-align:left;'>
                        {$row['pataddress']}  
                    </td>   
                  </tr>
                  <tr>
                     <th style='padding:10px;width:400px;text-align:right;'>
                        Remark:
                    </th>
                     
                    <td style='padding:10px;width:400px;text-align:left;'>
                        {$row['patremark']}  
                    </td>   
                  </tr>
                  <tr>
                     <th style='padding:10px;width:400px;text-align:right;'>
                        Doctor Name:
                    </th>
                    
                    <td style='padding:10px;width:400px;text-align:left;'>
                        {$row['drname']}  
                    </td>   
                  </tr>";


    }
    $output .= "</tbody> ";
    mysqli_close($conn);
    echo $output;
}

?>