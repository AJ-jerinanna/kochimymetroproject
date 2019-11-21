<?php  
 $connect = mysqli_connect("localhost","root","","kochimymetro");   
 if(!empty($_POST))  
 {  
      $output = '';  
      $message = '';  
      $sname = mysqli_real_escape_string($connect, $_POST["sname"]);  
      $dname = mysqli_real_escape_string($connect, $_POST["dname"]);  
      $fare = mysqli_real_escape_string($connect, $_POST["fare"]);  
      if($_POST["fid"] != '')  
      {  
           $query = "  
           UPDATE fare   
           SET sname='$sname',   
           dname='$dname',    
           fare = '$fare'   
           WHERE fid='".$_POST["fid"]."'";  
           $message = 'Data Updated';  
      }  
      else  
      {  
           $query = "  
           INSERT INTO fare(sname, dname, fare)  
           VALUES('$sname', '$dname','$fare');  
           ";  
           $message = 'Data Inserted';  
      }  
      if(mysqli_query($connect, $query))  
      {  
           $output .= '<label class="text-success">' . $message . '</label>';  
           $select_query = "SELECT * FROM fare ";  
           $result = mysqli_query($connect, $select_query);  
           $output .= '  
                <table class="table table-bordered">  
                      <tr>  
                                    <th width="35%">Starting Station</th>  
                                    <th width="35%">Destination Station</th> 
                                    <th width="15%">Edit</th>  
                                    <th width="15%">View fare</th>  
                               </tr>   
           ';  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '  
                     <tr>  
                          <td>' . $row["sname"] . '</td> 
                          <td>' . $row["dname"] . '</td>  
                          <td><input type="button" name="edit" value="Edit" id="'.$row["fid"] .'" class="btn btn-info btn-xs edit_data" /></td>  
                          <td><input type="button" name="view" value="view" id="' . $row["fid"] . '" class="btn btn-info btn-xs view_data" /></td>  
                     </tr>  
                ';  
           }  
           $output .= '</table>';  
      }  
      echo $output;  
 }  
 ?>
 

