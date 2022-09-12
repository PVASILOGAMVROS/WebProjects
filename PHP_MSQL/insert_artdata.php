<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
</head>
<body>
<h1>ART COLLECTION – Αποτελέσματα εισαγωγής έργου</h1>
<?php

    $Code = $_POST['Code'];
	$Artist = $_POST['Artist'];
	$Title = $_POST['Title'];
	$Year = $_POST['Year'];
	$Price = $_POST['Price'];
	
  if (!$Code || !$Artist || !$Title || !$Year || !$Price) {
     echo "You have not entered all the required details.<br>"
          ."Please go back and try again.";
     exit;
  }
  $Code = addslashes($Code);
  $Artist = addslashes($Artist);
  $Title = addslashes($Title);
  $Year = doubleval($Year);
  $Price = doubleval($Price);
  
  	// set database server access variables:
	$host = "fdb27.runhosting.com";
        $user = "3797345_vasilogamvros";
        $pass = "123456789aa";
	
	$db = "3797345_vasilogamvros";
  
  // open connection
$conn = new mysqli($host, $user, $pass, $db);
		
   if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
  
 
  $sql  = "INSERT INTO Arts (Code,Artist,Title,Year,Price)  
  VALUES ('".$Code."',
  '".$Artist."',
  '".$Title."',
  '".$Year."',
  '".$Price."')"; 
  if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error Insert Data: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
  

  
  
  
  
