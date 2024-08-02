<?php
      include('../connectiondatabase.php');


      $sql="SELECT * FROM specialistdetails";
      $query=mysqli_query($conn,$sql);
      $output="";

      if(mysqli_num_rows($query)>0){
            $output.='<table class="table caption-top text-dark">
            <thead>
              <tr>
                <th scope="col">Sl.No</th>
                <th scope="col">Specialist</th>
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
                      {$row['specialname']}
                    </td>
                    <td>
                      <button class='btn btn-primary' id='edit-btn' role='button' data-seid='{$row["specialid"]}'>Edit</button>
                    </td>
                    <td>
                      <button class='btn btn-primary'  id='delete-btn' role='button'  data-sdid='{$row["specialid"]}'>Delete</button>
                    </td>
                  </tr> </tbody>";
            }
            $output.="</table>";
            mysqli_close($conn);
            echo $output;
      }

?>