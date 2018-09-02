<!DOCTYPE html>
<html>
<head>
	<title>Display Information</title>
</head>
<body>
	<?php
		$enteredName = htmlentities($_POST['name']);
		$enteredGender = htmlentities($_POST['gender']);
		$enteredCategory = htmlentities($_POST['category']);
		$hobbies = implode(",", $_POST['hob']);
		var_dump($hobbies);
		$dishes = implode(",", $_POST['dishes']);
		 echo "Name : $enteredName<br />";
		 echo "Gender : $enteredGender<br />";
		 echo "Category : $enteredCategory<br />";
		 echo "Hobbies : $hobbies<br />";
		 echo "Dishes : $dishes";


	?>
</body>
</html>