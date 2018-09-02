<!DOCTYPE html>
<html>
<head>
	<title>Batch 2014</title>
	<a id="2014">
</head>
<body>
			<button type="submit" onclick="location.href='search.php';" >Search Index</button>
<input type="button" value="logout" ><a href="my.php">sabinlog</a>
			</body>
</html>
<?php
		
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

		$sql="SELECT  * FROM register";
		//-run  the query against the mysql query function
		//-create  while loop and loop through result set
		if(	$result = mysqli_query($conn, $sql)){
	
		//$rows = [];
	/* fetch associative array */
		echo "<table border>\n";
		echo "<th>Id</th>";
		echo "<th>FirstName</th>";
		echo "<th>Lastname</th>";
		echo "<th>No</th>";
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
?>
