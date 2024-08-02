<?php
      include('../connectiondatabase.php');

      $view_id=$_POST['view_id'];

      $sql="SELECT  fmon,tmon,ftue,ttue,fwed,twed,fthur,tthur,ffri,tfri,fsat,tsat FROM dr_registration   WHERE regid='{$view_id}'";
      $query=mysqli_query($conn,$sql);
      $output="";

      if(mysqli_num_rows($query)>0){
            $output.=""; 
             
            $slno=0;
            while($row=mysqli_fetch_assoc($query)){
                  $slno++;
     $output.="<thead>
     <tr>
       <th scope='col'>DAY</th>
       <th scope='col'>FROM TIME</th>
       <th scope='col'>TO TIME</th> 
     </tr>
   </thead>
   <tbody>
     <tr>
       <th scope='row'>MONDAY</th>
       <td>{$row['fmon']}</td>
       <td>{$row['tmon']}</td> 
     </tr>
     <tr>
       <th scope='row'>TUESDAY</th>
       <td>{$row['ftue']}</td>
       <td>{$row['ttue']}</td> 
     </tr>
     <tr>
     <th scope='row'>WEDNESDAY</th>
     <td>{$row['fwed']}</td>
     <td>{$row['twed']}</td> 
   </tr>
   <tr>
   <th scope='row'>THURSDAY</th>
   <td>{$row['fthur']}</td>
   <td>{$row['tthur']}</td> 
 </tr>
 <tr>
 <th scope='row'>FRIDAY</th>
 <td>{$row['ffri']}</td>
 <td>{$row['tfri']}</td> 
</tr>
<tr>
 <th scope='row'>SATURDAY</th>
 <td>{$row['fsat']}</td>
 <td>{$row['tsat']}</td> 
</tr>";



    }
    $output.="</tbody>";
    mysqli_close($conn);
    echo $output;
}

?>