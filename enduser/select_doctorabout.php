<?php
        include('../connectiondatabase.php');

         $aboutId=$_POST['aboutId'];  

 
     


 
        $sql="SELECT d.photo,d.regid,d.drname,c.cityname,l.locname,s.specialname,d.drcontact,d.work,d.draddress,d.drcharge,d.drvshr,d.experience,d.qualification 
        FROM dr_registration AS d,citydetails AS c,locdetails AS l,specialistdetails AS s WHERE   
           s.specialid=d.reg_special  AND l.locid=d.reg_loc AND c.cityid=l.city_name 
             AND  d.regid='{$aboutId}'";
      $query=mysqli_query($conn,$sql);
      $output="";
       

      if(mysqli_num_rows($query)>0){
            $output .=' ';
            
            while($row=mysqli_fetch_assoc($query)){
                   
                  $output .="<tbody>
                  <tr> 
                      <td style='text-align:left;float:left;'><p> 
                      {$row["drname"]} is  {$row["specialname"]}  specialist in  {$row["locname"]} ,{$row["cityname"]}  and  has an  Experience of {$row["experience"]} in these fields. 
                      </p>
                      </td> 
                  </tr> 
                   
                  </tbody>  ";
            }
            // $output .='';


        

            mysqli_close($conn);
            echo $output;
            
      }
    // }else{
    //   echo "Record not found";
    // }
        ?>
        
    
         


   

      