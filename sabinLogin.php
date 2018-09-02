<!DOCTYPE html>
<html>
<head>
	<title>Sabin ko login</title>
</head>
<body>
	<?php
	if ($_SERVER["REQUEST_METHOD"]==="POST"){
		$user=$_POST["username"];
		$pass=$_POST["password"];
		if($user=="sabin"&& $pass=="sabpass"){
			session_start();
			$_SESSION['login_user']=$user;
			echo $_SESSION['login_user'];
			header("location: 2014.php");
		}
	}

	?>
	<form name ="myform" method="post" >
		name:<br/>
		<input type= "text" name ="username"><br/>
		password:
		<br/><input type="password" name="password"><br/><br/>
		<input type="submit" value="submit">


</body>
</html>