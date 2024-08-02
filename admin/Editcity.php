<?php

include('../connectiondatabase.php');  



$cityid=$_POST['edit_id'];  

$sql="SELECT * FROM citydetails   WHERE cityid=' {$cityid}'";
$query=mysqli_query($conn,$sql);
$output="";

if(mysqli_num_rows($query)>0){
       
       
      while($row=mysqli_fetch_assoc($query)){
            
    $output .="<tr>
                  <td>
                       <div style='margin-left:100px;margin-right:100px;margin-top:40px;'>  
                           <input type='text' class='form-control border border-2 border-success my-4' placeholder='City name' 
                               id='cityed' value='{$row["cityname"]}'>
                           <input type='text' id='edit-id' hidden value='{$row["cityid"]}'>
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