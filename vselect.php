<?php  
 if(isset($_POST["fid"]))  
 {  
      $output = '';  
      $connect = mysqli_connect("localhost","root","","kochimymetro"); 
      $query = "SELECT * FROM fare WHERE fid = '".$_POST["fid"]."'";  
      $result = mysqli_query($connect, $query);  
      $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">';  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td width="30%"><label>Starting Station</label></td>  
                     <td width="70%">'.$row["sname"].'</td>  
                </tr> 

                <tr>  
                     <td width="30%"><label>Destination Station</label></td>  
                     <td width="70%">'.$row["dname"].'</td>  
                </tr>  
               
                
                <tr>  
                     <td width="30%"><label>fare</label></td>  
                     <td width="70%">'.$row["fare"].'</td>  
                </tr>  
           ';  
      }  
      $output .= '  
           </table>  
      </div>  
      ';  
      echo $output;  
      }  
 ?>