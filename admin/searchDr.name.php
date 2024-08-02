<?php
        include('../connectiondatabase.php');

         $serch_city=$_POST['serchcity'];
         $serch_loc=$_POST['serchloc'];
         $serch_special=$_POST['serchspecial'];
         $serch_drname=$_POST['serchdrname'];

// if(  $serch_city!="" && $serch_loc!=""  && $serch_special!="" &&  $serch_drname!="" ){
     


 
        $sql="SELECT d.regid,d.drname,c.cityname,l.locname,s.specialname,d.drcontact,d.work 
        FROM dr_registration AS d,citydetails AS c,locdetails AS l,specialistdetails AS s WHERE   
           s.specialid=d.reg_special  AND l.locid=d.reg_loc AND c.cityid=l.city_name 
           AND d.regid='{$serch_drname}' AND d.reg_loc='{$serch_loc}'
           AND d.reg_special='{$serch_special}' AND c.cityid='{$serch_city}'";
      $query=mysqli_query($conn,$sql);
      $output="";
       

      if(mysqli_num_rows($query)>0){
            $output .='<div class="mb-3 text-center border border-2 border-dark"
            style="width:100%;margin:auto;height:auto;background-color:lightgreen;margin-top:50px;">
             
            <div class="d-grid gap-2 col-12 mx-auto bg-primary p-3 text-white fw-bold" style="font-size:25px;">
              Search Doctor
            </div>
            <br>
               <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                         <button id="back-btn" class="btn btn-primary me-md-2" type="button">Back</button>
                          
                      </div> 
             
            <div id="modal-form">
            <table class="table caption-top text-dark">
            <thead>
              <tr>
                <th scope="col">Sl.No</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Operation</th>
              </tr>
            </thead>';
            $slno=0;
            while($row=mysqli_fetch_assoc($query)){
                  $slno++;
                  $output .="<tbody>
                  <tr>
                  <td>
                       {$slno}
                  </td>  
                    <td>
                    {$row["drname"]}
                    </td>
                     
                    <td>
                      <button class='btn btn-primary' id='view-btn' role='button' data-regvi_id='{$row["regid"]}'>View</button> 
                    </td>
                  </tr> </tbody> ";
            }
            $output .='</table>
            <br> 
          </div>
        </div>  ';


        

            mysqli_close($conn);
            echo $output;
            
      }
    // }else{
    //   echo "Record not found";
    // }
        ?>
        
    
         


   

      