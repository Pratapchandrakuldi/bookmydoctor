<?php
      include('../connectiondatabase.php');


      $sql="SELECT c.cityname,l.locid,l.locname FROM citydetails AS c, locdetails AS l WHERE c.cityid=l.city_name";
      $query=mysqli_query($conn,$sql);
      $output="";

      if(mysqli_num_rows($query)>0){
            $output.='<table class="table caption-top text-dark">
            <thead>
              <tr>
                <th scope="col">Sl.No</th>
                <th scope="col">Location Name</th>
                <th scope="col">City Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
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
                      {$row['locname']}
                    </td>
                    <td>
                      {$row['cityname']}
                    </td>
                    <td>
                      <button class='btn btn-primary' id='loc-btn' role='button' data-lid='{$row["locid"]}'>Edit</button>
                    </td>
                    <td>
                      <button class='btn btn-primary'  id='delloc-btn' role='button'  data-dlid='{$row["locid"]}'>Delete</button>
                    </td>
                  </tr> </tbody>";
            }
            $output.="</table>";
            mysqli_close($conn);
            echo $output;
      }

?>