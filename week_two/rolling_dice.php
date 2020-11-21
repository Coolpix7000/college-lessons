<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Rolling dice</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
	<h2>How many rolls?</h2>
	<form method="get" autocomplete="off">
		<label>Input number:</label>
		<input type="text" id="rolls" name="rolls">
		<input type="submit" value="Go">
	</form>
	<?php
		//Set the variables
		$rolls = (int) $_GET['rolls'];
		$i = 0;
		$total = 0;
		
		while($i < $rolls) {
			$add = rand(1, 6);
			$total += $add;
			$i++;
		}
	
		echo('<br><br>'); // Add spacing
	
		echo('Your total is: '.$total);
	?>
</body>
</html>