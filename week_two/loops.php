<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Loops</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
	<?php
		echo('While loop:<br><br>');
	
		$i = 1;
	
		while($i <= 5) {
			echo('The number is: '.$i.'!<br>');
			$i++;
		}
	
		echo('<br><br>'); // Add spacing
	
		echo('Do-while loop:<br><br>');
	
		$i = 1;
	
		do {
			echo('The number is: '.$i.'!<br>');
			$i++;
		} while($i <= 5);
	
		echo('<br><br>'); // Add spacing
	
		echo('For loop:<br><br>');
		
		for($i = 0; $i <= 10; $i++) {
			echo('The number is: '.$i.'!<br>');
		}
		
		echo('<br><br>'); // Add spacing
		
		echo('Foreach loop:<br><br>');
		
		$colors = array('Red', 'Orange', 'Yellow', 'Green', 'Blue', 'Purple');
	
		foreach($colors as $color) {
			echo('Colour: '.$color.'<br>');
		}
	
	?>
</body>
</html>