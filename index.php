<!DOCTYPE html>
<html>
	<head>
		<title>Project Sign Up</title>
		<link rel="stylesheet" type="text/css" href="signup.css">
		<a id="signup">
		</head>
		<body style="background-color: #ADD8E6">
			<div class="border">
				<form name="f1" method="post">
					<div class="signup">
						<h1>Sign Up</h1>
						<hr width="300px"
						size="3px"
						>
					</div>
					<table cellspacing="15px">
						
						<tr>
							<td><span class="fname">First Name:</td>
							<td><input type="text" name="fname" placeholder="first name" class="button"/></span></td>
						</tr>
						<tr>
							<td><span class="lname">
							Last Name:</td>
							<td><input type="text" name="lname" placeholder="last name" class="button"/></span></td>
						</tr><br>
						
						
						<tr>
							<td><span class="address">Address:</td>
							<td><input type="text" name="address" placeholder="address" class="button"/></span></td>
						</tr>
						<tr>
							<td><span class="gender">Gender:</td>
							<td><input type="radio" value="male" name="Gender" checked="checked"/>Male
							<input type="radio" value="female" name="Gender"/>Female
							<input type="radio" value="other" name="Gender"/>Other
						</span></td>
					</tr>
					<tr>
						<td><span class="dob">
						Date Of Birth:</td>
						<td><select name="Month">
							<option disabled> - Month - </option>
							<option value="January">January</option>
							<option value="Febuary">Febuary</option>
							<option value="March">March</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="August">August</option>
							<option value="September">September</option>
							<option value="October">October</option>
							<option value="November">November</option>
							<option value="December">December</option>
						</select>
						
						<select name="Day">
							<option disabled> - Day - </option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
						</select>
						<select name="Year">
							<option disabled> - Year - </option>
							<option value="1993">1993</option>
							<option value="1992">1992</option>
							<option value="1991">1991</option>
							<option value="1990">1990</option>
							<option value="1989">1989</option>
							<option value="1988">1988</option>
							<option value="1987">1987</option>
							<option value="1986">1986</option>
							<option value="1985">1985</option>
							<option value="1984">1984</option>
							<option value="1983">1983</option>
							<option value="1982">1982</option>
							<option value="1981">1981</option>
							<option value="1980">1980</option>
							<option value="1979">1979</option>
							<option value="1978">1978</option>
							<option value="1977">1977</option>
							<option value="1976">1976</option>
							<option value="1975">1975</option>
							<option value="1974">1974</option>
							<option value="1973">1973</option>
							<option value="1972">1972</option>
							<option value="1971">1971</option>
							<option value="1970">1970</option>
							<option value="1969">1969</option>
							<option value="1968">1968</option>
							<option value="1967">1967</option>
							<option value="1966">1966</option>
							<option value="1965">1965</option>
							<option value="1964">1964</option>
							<option value="1963">1963</option>
							<option value="1962">1962</option>
							<option value="1961">1961</option>
							<option value="1960">1960</option>
							<option value="1959">1959</option>
							<option value="1958">1958</option>
							<option value="1957">1957</option>
							<option value="1956">1956</option>
							<option value="1955">1955</option>
							<option value="1954">1954</option>
							<option value="1953">1953</option>
							<option value="1952">1952</option>
							<option value="1951">1951</option>
							<option value="1950">1950</option>
							<option value="1949">1949</option>
							<option value="1948">1948</option>
							<option value="1947">1947</option>
							
						</select>
						
					</span>
				</td>
			</tr>
			<tr>
				<td><span class="username">Username:</td>
				<td><input type="text" name="user" placeholder="username" class="button" required="required" /></span></td>
			</tr>
			<tr>
				<td><span class="password">Password:</td>
				<td><input type="password" name="password" placeholder="password" class="button" required="required" /></span></td>
			</tr>
			<tr>
				<td><span class="confirmpassword">Confirm Password:</td>
				<td><input type="password" name="confirmpassword" placeholder="retype-password" class="button" required="required" /></span></td>
			</tr>
			<tr>
				<td><span class="signup">
					<button type="submit" class="signbutton" >Sign Up</button>
				</span>
				
			</table>
		</form>
		
		
		<?php
		// define variables and set to empty values
		$fname = $lname = $address = $gender = $dob = $user = $pass= $confirmpassword ="";
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$fname = test_input($_POST["fname"]);
			$lname = test_input($_POST["lname"]);
			$address = test_input($_POST["address"]);
			$gender = test_input($_POST["Gender"]);
			$month = test_input($_POST["Month"]);
			$day = test_input($_POST["Day"]);
			$year = test_input($_POST["Year"]);
			$user = test_input($_POST["user"]);
			$pass = md5(test_input($_POST["password"]));
			$confirmpassword = md5(test_input($_POST["confirmpassword"]));
				
		$dob= $month.'/'.$day.'/'.$year;
		// $password=md5($_POST['mypassword']); $query = "SELECT * FROM users WHERE username = '$username' and password='$password'"; – Nicola Apr 30 '12 at 20:10
		
		$servername = "localhost";
		$username="root";
		$password = "";
		$dbname = "signup";
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
		echo "Connected successfully";
		//INSERT
		$sql= "INSERT INTO register(Firstname, Lastname, Address, Gender, DateofBirth, Username, Password, Confirm)
				VALUES('$fname', '$lname', '$address', '$gender', '$dob', '$user', '$pass', '$confirmpassword')";
		//TABLE
		/* "CREATE TABLE MyGuests (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,s
		email VARCHAR(50),
		reg_date TIMESTAMP
		)";
		//Delete
		$sql="DELETE FROM myguests WHERE firstname='Alfred Schmidt'";
		
		/*///$sql = "CREATE DATABASE myDBo";
		//Update
		//$sql="UPDATE MyGuests
		//SET firstname = 'Alfred Schmidt', lastname= 'Frankfurt'
		//WHERE id = 1";
		
		if ($conn->query($sql) === TRUE) {
		//$last_id = $conn->insert_firstname;
		echo "New record created successfully.";
		} else {
		echo "Error: " . $sql . "<br>" ."<br>". $conn->error;
		}
		/*if ($conn->query($sql) === TRUE) {
		echo "created successfully";
		} else {
		echo "Error creating database: " . $conn->error;
		}//*/
		$conn->close();
		}
		function test_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
		?>
		<a href="login.php">login</a>
	</body>
</html>