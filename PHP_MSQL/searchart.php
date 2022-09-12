<html >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
     echo "You have nott entered search details. Go back and try again.";
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
	echo "Connected successfully";
	
	

	$sql = "SELECT Code, Artist, Title,Year, Price FROM Arts WHERE " .$searchtype." like '%".$keyword."%'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
           echo "<table><tr><th>CODE</th><th>ARTIST</th><th>TITLE</th><th>YEAR</th><th>PRICE</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr> <td>" . $row["Code"]. "</td>
			<td>" . $row["Artist"]. "</td>
			<td>" . $row["Title"]. "</td>
			<td>" . $row["Year"]. "</td>
			<td>" . $row["Price"]. "</td>
			</tr>";
			
		}
		echo "The data you seek is on the below table </table>";
	} else {
		echo "0 results";
	}

	$conn->close();
?>

</body>
</html>