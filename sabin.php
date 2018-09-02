<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if($_SERVER["REQUEST_METHOD"]=="POST"){
$myname=$_POST["name"];
echo "$myname"."<br>";
$conn=new mysqli("localhost","root","","signup");
$sql="Insert into register(Firstname) values('$myname')";
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully"."<br>";
$conn->query($sql);
$sql1="SELECT * FROM register";
$result=$conn->query($sql1);
while($row=mysqli_fetch_assoc($result)){
		$id=$row["Id"];
		$Firstname=$row["Firstname"];
		echo "$id"."<br>";
		echo "$Firstname"."<br>";
	}
	}?>
	<form name= "form 1" method="POST" >
		Name:
		<input type="text" name="name"/><br/>
		<button type="submit" value="submit" name="submit">Submit</button>

	</form>

</body>
</html>