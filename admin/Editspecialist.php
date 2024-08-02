<?php

include('../connectiondatabase.php');  



$specialistid=$_POST['edit_sid'];  

$sql="SELECT * FROM `specialistdetails`   WHERE `specialid` = '{$specialistid}'";
$query=mysqli_query($conn,$sql);
$output="";

if(mysqli_num_rows($query)>0){
       
       
      while($row=mysqli_fetch_assoc($query)){
            
    $output .="<tr>
                  <td>
                       <div style='margin-left:100px;margin-right:100px;margin-top:40px;'>  
                           <input type='text' class='form-control border border-2 border-success my-4' placeholder='City name' 
                               id='specialid' value='{$row["specialname"]}'>
                           <input type='text' id='edit-sid' hidden value='{$row["specialid"]}'>
                        </div>
                  </td>
             </tr>
             <tr>
                 <td> 
                    <div class='d-grid gap-2 d-md-flex col-3  mx-auto my-1'>
                     <button class='btn btn-primary me-md-2' id='update-btn'  type='submit'>ADD CITY</button>
                     <button class='btn btn-primary' type='reset'>RESET</button>
                    </div>
                  </td>
             </tr>"; 
      }
        
      mysqli_close($conn);
      echo $output;
}
 

?>