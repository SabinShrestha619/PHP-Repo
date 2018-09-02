<?php
   include("config.php");
  // session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = md5(mysqli_real_escape_string($db,$_POST['password'])); 
      
      $sql = "SELECT * FROM register WHERE Username ='$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql); 
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
     // $active = $row['active'];
      echo "$myusername"."$mypassword"."P";

      $count = mysqli_num_rows($result);
      echo "$count";
     // echo "$_POST['username']";
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
    //     session_register("myusername");
       //  $_SESSION['login_user'] = $myusername;
        echo "lalalala";
         
         header("location: Pro-Homepage.html");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Project Login Form</title>
	<link rel="stylesheet" type="text/css" href="loginsheet.css">
</head>
<body style="background-color: #FAFAD2">
	<form name="loginform" method="post">
	<div class="border">
	
	<div class="name">
		<h1>Login</h1>
		<hr width="300px"
		size="3px"
		>
	</div>

	<div class="username">
		Username<br>
		<input type="text" name="username" placeholder="username" class="placeholder" required="required">	
	</div>

	<div class="password">
		Password<br>
		<input type="password" name="password" class="placeholder" placeholder="password" required="required">	
	</div>

	<div class="login">
		<button type="submit" class="button" >Login</button>
	</div>

	<div class="remember">
		<input type="checkbox" name="checkbox" checked="checked"> Remember me	
	</div>


<div class="hover">
	<span class="cancel">
		<button type="button" name="cancelbutton"  class="cancelbutton">Cancel</button>
	</span>

	<span class="signup">
		<a href="SignUp.html#signup" button type="button" class="signbutton" target="_blank">Sign Up</a>
	</span>
</div>

<div class="forgot">
		<a href="forgotpassword.html#id1" target="_blank">Forgot Password?</a>
	</div>


</div>
</form>
</body>
</html>