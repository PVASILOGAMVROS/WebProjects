<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ART COLLECTION : αποτελέσματα διαγραφής Εργου</title>
</head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
<body>



<?php

	$keyword = $_POST['keyword'];
	$searchtype = $_POST['searchtype'];
	
	if (!$keyword || !$searchtype) {
     echo "You have nott entered search details. Go back and try again.\n "  ; 
     exit;
  }
 
	// set database server access variables:
	 $host = "fdb27.runhosting.com";
        $user = "3797345_vasilogamvros";
        $pass = "123456789aa";
		$db = "3797345_vasilogamvros";
	
	// open connection
	$conn = new mysqli($host, $user, $pass, $db);
	// Check connection
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
      }
      echo  "Connected successfully \n " ;
	
	echo "\n";
      //delete art
	$sql = "DELETE FROM Arts WHERE " .$searchtype." like '%".$keyword."%'";
	if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}
//close the connection
	$conn->close();
?>

</body>
</html>