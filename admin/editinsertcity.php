<?php
       include('../connectiondatabase.php');

       $cityname=$_POST['editid'];  

       $sql="SELECT * FROM citydetails   WHERE cityid=' $cityname'";
       $query=mysqli_query($conn,$sql);
       $output="";
 
       if(mysqli_num_rows($query)>0){
              
              
             while($row=mysqli_fetch_assoc($query)){
                   
                   $output.="<div class='col-sm-10 mx-auto'  >
                         
                    
                   <input type='text' class='form-control border border-2 border-success my-4' placeholder='City Name'
                   name='cityname' id='cityname' value='{$row["cityname"]}'>"; 
             }
             $output.="</div>"; 
             mysqli_close($conn);
             echo $output;
       }

?>