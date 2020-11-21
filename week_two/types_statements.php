<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Statements</title>
</head>
	<?php

		date_default_timezone_set('Europe/London'); //Set the timezone, avoids error
	
		//Set the variable
		$t = date("H"); //Gets the hour

		//Simple 'if' statement
		if($t < "20") {
			echo("Have a good day!");
		}
	
		echo('<br><br>'); //Add spacing
		
		//Simple 'if else' statement
		if($t < "10") {
			echo("Have a good morning!");
		} else if($t < "20") {
			echo("Have a good day!");
		} else {
			echo("Have a good night!");
		}
	
		//Switch statement
	
		echo('<br><br>'); //Add spacing
	
		$favourite_color = 'Purple';
	
		switch($favourite_color) {
			case 'Red':
				echo('Your favourite color is red');
				break;
			case 'Green':
				echo('Your favourite color is green');
				break;
			case 'Blue':
				echo('Your favourite color is blue');
				break;
			case 'Purple':
				echo('Your favourite color is purple');
				break;
			default:
				echo('Your favourite color is not red, green, blue or purple');
				break;
		}
	
	?>
<body>
</body>
</html>
