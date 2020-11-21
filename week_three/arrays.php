<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Arrays</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php
		echo('<h2>Standard arrays:</h2>');
		$colours = array('Red', 'Orange', 'Yellow', 'Green', 'Blue', 'Purple');
		//Processing array with foreach:
		echo('Colour array (using foreach loop):<br>');
		display_array($colours, 'line_line');
	
		echo('<br>'); // Add spacing
	
		//Processing array with for:
		echo('Colour array (using for loop):<br>');
		$arr_length = count($colours);
		for($i = 0; $i < $arr_length; $i++) {
			echo($colours[$i]);
			echo '<br>';
		}
		
		echo('<br>Number of elements in array: '.count($colours));
	
		echo('<br><h2>Associative arrays:</h2>');
		$ages = array('Peter'=>17,
					  'Ben'=>27,
					  'Matt'=>18,
					  'James'=>35);
		foreach($ages as $name=>$age) {
			echo('Key (name) = '.$name.', Value (age) = '.$age);
			echo('<br>');
		}
	
		echo('<h2>Multidimensional arrays:</h2>');
	
		$cars = array(
					array('Volvo',22,18),
					array('BMW',15,13),
					array('Saab',5,2),
					array('Land Rover',17,15)
					);
	
		//Nested loop:
		for($row = 0; $row < 4; $row++) {
			echo('<p><b>Row number: '.$row.'</b></p>');
			echo('<ul>'); //Add a list
			for($col = 0; $col < 3; $col++) {
				echo('<li>'.$cars[$row][$col].'</li>'); //Add list items
			}
			echo('</ul>');
		}
	?>
</body>
</html>