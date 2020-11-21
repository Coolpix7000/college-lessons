<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Interfaces/polymorphism</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		// Interface definition
		echo('<h1>Interfaces/polymorphism</h1>');
		interface animal {
			function make_sound();
		}
	
		// Class definition
		class cat implements animal {
			function make_sound() {
				echo('Meow');
			}
		}
	
		class dog implements animal {
			function make_sound() {
				echo('Woof');
			}
		}
	
		class mouse implements animal {
			function make_sound() {
				echo('Squeak');
			}
		}
		
		// Create a list of animals
		$cat = new cat();
		$dog = new dog();
		$mouse = new mouse();
		$animals = array($cat, $dog, $mouse); // Put the animals in an array
	
		// Tell the animals to make a sound
	
		foreach($animals as $animal) {
			$animal->make_sound();
			echo('<br>');
		}
	?>
</body>
</html>