<?php
 
include('../connectiondatabase.php');

      $doctorname=$_POST['serchdrname'];

$sql = "SELECT i.imgid,i.imagefile FROM `dr_images` AS i INNER JOIN `dr_registration` AS d WHERE d.regid = i.dr_name AND i.dr_name='{$doctorname}'";
$query = mysqli_query($conn, $sql);
$output = "";

if (mysqli_num_rows($query) > 0) {
  $output .= "<tr><td><div  style='margin:auto;'>";

  while ($row = mysqli_fetch_assoc($query)) {

    $output .= " <label>  
                    <img src='../doctor/uploads/" . $row['imagefile'] . "' style='width:100px;height:100px;border:1px solid black;position:relative;'/>&nbsp;&nbsp;
                   
                  <p><u>
                      <button class ='fw-red' style='background-color:none;margin-top:10px;float:left;' id='delete-imgbtn' role='button' data-imgid='{$row["imgid"]}'>Delete</button> 
                    </u></p>   
                       
                       
                    </label>";
  }
  $output .= "</div></td></tr>";
  mysqli_close($conn);
  echo $output;
}
?>