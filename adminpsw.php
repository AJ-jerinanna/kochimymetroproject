<?php

  include "co.php";

  $m="admin@gmail.com";
  $p="Admin123";
  $psw=md5($p);
  $sq="INSERT INTO login(emailid,password,type) VALUES ('$m','$psw',0) ";
  $qu=mysqli_query($con,$sq);
  if($qu)
  {
  	echo "Success";
  }
  else
  {
  	echo $con->error;
  }
?>