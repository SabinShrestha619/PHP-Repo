<!DOCTYPE html>
<html>
<head>
	<title>Batch 2014</title>
	<a id="2014">
</head>
<body>
<form name="f1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Name:<input type="text" name="key" required="required"></input><br>
			<button type="submit">Submit</button>
		</form>
	</body>
</html>
<?php
	$key ="";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$key = test_input($_POST["key"]);
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "log";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
				
		$sql="SELECT  * FROM register WHERE name LIKE '%" . $key .  "%' OR password LIKE '%" . $key ."%'";
		//-run  the query against the mysql query function
		//-create  while loop and loop through result set
		if(	$result = mysqli_query($conn, $sql)){
	
		//$rows = [];
	/* fetch associative array */
		echo "<table border>\n";
		while ($row = mysqli_fetch_assoc($result)) {
				$ID=$row["Id"];
				$FirstName=$row["name"];
				$password=$row["password"];
				$conpass=$row["confirmpassword"];
		echo "<tr>\n";
					
					echo "<td>". $FirstName . "</td>\n" ;
					echo "<td>" . $password ."</td>\n";
					echo "<td>" . $conpass ."</td>\n " ;
					echo "<td>" . $ID ."</td> \n";
		echo "</tr>\n" ;
		}
		echo "</table>\n";
/* free result set */
mysqli_free_result($result);
}
		
		$conn->close();
}
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
		
?>
