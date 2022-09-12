
<?php

	
 $host = "fdb27.runhosting.com";
 $user = "3797345_vasilogamvros";
 $pass = "123456789aa";
 
 
 $conn = new mysqli($host, $user, $pass);
  
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  
  
 
}
 
echo "Connected succesfully";
   
?>