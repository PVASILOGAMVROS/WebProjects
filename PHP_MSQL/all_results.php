<!DOCTYPE html>
<html>

<style>
table, th, td {
    border: 2px solid black;
}
</style>
<body>

<?php
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
	echo "Connected successfully";
	
	// select database

	$sql = "SELECT * FROM Arts ";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		echo "<table><tr><th>CODE</th><th>ARTIST</th><th>TITLE</th><th>YEAR</th><th>PRICE</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr></td>
			<td>" . $row["Code"]. "</td>
			<td>" . $row["Artist"]. "</td>
			<td>" . $row["Title"]. "</td>
			<td>" . $row["Year"]. "</td>
			<td>" . $row["Price"]. "</td>
			</tr>";
		}
		echo "<br> ALL THE DATA  INCLUDED ON THE TABLE BELOW </table>";
	} else {
		echo "0 results";
	}

	$conn->close();
?>

</body>
</html>