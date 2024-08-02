<?php

include('../connectiondatabase.php');  



$locid=$_POST['editloc_id'];  

$sql="SELECT c.cityid,c.cityname,l.locid,l.locname FROM citydetails AS c, locdetails AS l WHERE l.locid='{$locid}' and c.cityid=l.city_name";
$query=mysqli_query($conn,$sql);
$output="";

if(mysqli_num_rows($query)>0){
       
       
      while($row=mysqli_fetch_assoc($query)){
            
    $output ="<tr>
                    <td>
                    <div class='col-sm-10 mx-auto'>

                    <select class='form-control  border border-2 border-success' id='chosecity'>
                      <option value='{$row["cityid"]}'>{$row["cityname"]}</option>
          
                    </select>
                  </div>
                    </td>
              </tr>
              <tr>
                  <td>
                       <div style='margin-left:100px;margin-right:100px;margin-top:40px;'>  
                           <input type='text' class='form-control border border-2 border-success my-4' placeholder='City name' 
                               id='locationid' value='{$row["locname"]}'>
                           <input type='text' id='edloc-id' hidden value='{$row["locid"]}'>
                        </div>
                  </td>
             </tr>
             <tr>
                 <td> 
                    <div class='d-grid gap-2 d-md-flex col-3  mx-auto my-1'>
                     <button class='btn btn-primary me-md-2' id='updateloc-btn'  type='submit'>ADD</button>
                     <button class='btn btn-primary' type='reset'>RESET</button>
                    </div>
                  </td>
                  </tr>"; 
      }
       
      mysqli_close($conn);
      echo $output;
}
 

?>