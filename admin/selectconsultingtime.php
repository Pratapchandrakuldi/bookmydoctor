<?php
      include('../connectiondatabase.php');

      
      $doctor_id=$_POST['doctorid'];
      
            $sql="SELECT regid,fmon,tmon,ftue,ttue,fwed,twed,fthur,tthur,ffri,tfri,fsat,tsat FROM  dr_registration WHERE regid='{$doctor_id}'";
      $query=mysqli_query($conn,$sql);
      $output="";

      if(mysqli_num_rows($query)>0){
            
            
            while($row=mysqli_fetch_assoc($query)){
                  
                  $output .="<tr> 
                  <td>
                      <div>
                          <label class='form-label'>DAY</label>
                          <input type='text' class='form-control' id='reg' hidden name='fmon'  value='{$row["regid"]}'>
                      </div>
                      Monday:
                  </td>
                  <td>
                      <label class='form-label'>FROM TIME</label>
                      <input type='text' class='form-control' id='fmon' name='fmon'  value='{$row["fmon"]}'>
                  </td>
                  <td>
                      <label class='form-label'>TO TIME</label>
                      <input type='text' class='form-control' id='tmon' name='tmon' value='{$row["tmon"]}'>
                  </td>

              </tr>
              <tr>
                  <td>
                      Tuesday:
                  </td>
                  <td>
                      <input type='text' class='form-control' id='ftue' name='ftue'  value='{$row["ftue"]}'>
                  </td>
                  <td>
                      <input type='ext' class='form-control' id='ttue' name='ttue'  value='{$row["ttue"]}'>
                  </td>
              </tr>
              <tr>
                  <td>
                      Wednesday:
                  </td>
                  <td>
                      <input type='text' class='form-control' id='fwed' name='fwed' value='{$row["fwed"]}'>
                  </td>
                  <td>
                      <input type='text' class='form-control' id='twed' name='twed'  value='{$row["twed"]}'>
                  </td>

              </tr>
              <tr>
                  <td>
                      Thursday:
                  </td>
                  <td>
                      <input type='text' class='form-control' id='fthur' name='fthur'  value='{$row["fthur"]}'>
                  </td>
                  <td>
                      <input type='text' class='form-control' id='tthur' name='tthur'  value='{$row["tthur"]}'>
                  </td>

              </tr>
              <tr>
                  <td>
                      Friday:
                  </td>
                  <td>
                      <input type='text' class='form-control' id='ffri' name='ffri'  value='{$row["ffri"]}'>
                  </td>
                  <td>
                      <input type='text' class='form-control' id='tfri' name='tfri'  value='{$row["tfri"]}'>
                  </td>
              </tr>
              <tr>
                  <td>
                      Saturday:
                  </td>
                  <td>
                      <input type='text' class='form-control' id='fsat' name='fsat' value='{$row["fsat"]}'>
                  </td>
                  <td>
                      <input type='text' class='form-control' id='tsat' name='tsat'  value='{$row["tsat"]}'>
                  </td> ";
            }
            $output .="</tr>";
             
            mysqli_close($conn);
            echo $output;
        }
      
       
      
?>