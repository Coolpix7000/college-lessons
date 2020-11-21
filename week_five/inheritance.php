<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Inheritance</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		echo('<h1>Inheritance</h1>');
		echo('<h2>Fruit:</h2>');
		class fruit {
			public $name;
			public $color;
			
			function __construct($name, $color) {
				$this->name = $name;
				$this->color = $color;
			}

			protected function intro() {
				echo('This fruit is '.$this->name.' and the color is '.$this->color.'.');
			}
			
		}
	
		class strawberry extends fruit { // Inherits everything from the 'fruit' class
			function message() {
				echo('Am I a fruit or a berry?');
				$this->intro();
			}
		}
		
//		$strawberry = new strawberry('Strawberry', 'Red');
//		$strawberry->message(); // This now prints the message AND the intro() function
////		$strawberry->intro(); //Error - Protected function
	
	
		echo('<h2>Fruit (over-ridden):</h2>');
	
		class fruit_two {
			public $name;
			public $color;
			
			function __construct($name, $color, $weight) {
				$this->name = $name;
				$this->color = $color;
				$this->weight = $weight;
			}

			protected function intro() {
				echo('This fruit is '.$this->name.' and the color is '.$this->color.'.');
			}
			
		}
	
		class strawberry_two extends fruit_two { // Inherits everything from the 'fruit' class and over-rides the intro() function
			public $weight;
			function intro() {
				echo('This fruit is '.$this->name.', and the color is '.$this->color.', and the weight is '.$this->weight.'g.');
			}
		}
		
		$strawberry = new strawberry_two('Strawberry', 'Red', 20);
		$strawberry->intro();
	
	?>
</body>
</html>