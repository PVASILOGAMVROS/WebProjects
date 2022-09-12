
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Δημιουργία πίνακα Arts</title>
</head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<body>



<?php
	
 
	// set database server access variables:
	$host = "fdb27.runhosting.com";
        $user = "3797345_vasilogamvros";
        $pass = "123456789aa";
	
	$db = "3797345_vasilogamvros";
	
	
	// Create connection
	$conn = new mysqli($host, $user, $pass, $db);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}





$sql = "CREATE TABLE Arts (
Code INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Artist VARCHAR(30) NOT NULL,
Title VARCHAR(30) NOT NULL,
Year FLOAT NOT NULL,
Price FLOAT NOT NULL)";
if ($conn->query($sql) === TRUE) {
  echo "Table Arts created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>


</body>
</html>