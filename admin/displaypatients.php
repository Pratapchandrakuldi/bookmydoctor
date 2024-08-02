<?php
      include('../connectiondatabase.php');


      $sql="SELECT p.patname,p.patcontact,p.patdate,p.pattime,p.pat_id,d.drname FROM patientdetails As p,dr_registration AS d WHERE d.regid=p.pat_drname";
      $query=mysqli_query($conn,$sql);
      $output="";

      if(mysqli_num_rows($query)>0){
            $output.='<table class="table caption-top text-dark">
            <thead>
              <tr>
                <th scope="col">Sl.No</th>
                <th scope="col">Patient Name</th>
                <th scope="col">Contact Number</th>
                <th scope="col">Appointment Date</th>
                <th scope="col">Appointment Time</th>
                <th scope="col">Dr. Name</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>';
            $slno=0;
            while($row=mysqli_fetch_assoc($query)){
                  $slno++;
                  $output.="<tbody>
                  <tr>
                  <td>
                       {$slno}
                  </td>  
                    <td>
                      {$row['patname']}
                    </td>
                    <td>
                    {$row['patcontact']}
                  </td>  
                  <td>
                  {$row['patdate']}
                  </td>  
                  <td>
                  {$row['pattime']}
                  </td>
                  <td>
                  {$row['drname']}
                  </td>    
                    <td>
                      <button class='btn btn-primary' id='view-btn' role='button' data-pvid='{$row["pat_id"]}'>View</button>
                    </td>
                    <td>
                      <button class='btn btn-primary'  id='delete-btn' role='button'  data-pdid='{$row["pat_id"]}'>Delete</button>
                    </td>
                  </tr> </tbody>";
            }
            $output.="</table>";
            mysqli_close($conn);
            echo $output;
      }

?>