<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Classes</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		echo('<h1>Classes</h1>');
		echo('<h2>Fruit:</h2>');
		class fruit {
			// Properties 
			public $name;
			public $color;
		
			// Methods
			function set_name($name) {
				$this->name = $name;
			}
			function get_name() {
				return $this->name;
			}
			function set_color($color) {
				$this->color = $color;
			}
			function get_color() {
				return $this->color;
			}
			
		}
		// Create objects with the class
		$apple = new fruit();
		$banana = new fruit();
		
		$apple->set_name('Apple');
		$banana->set_name('Banana');
	
		$apple->set_color('Red');
		$banana->set_color('Yellow');
	
		echo('<h3>Names:</h3>');
		echo($apple->get_name());
		echo('<br>');
		echo($banana->get_name());
	
		echo('<h3>Colors:</h3>');
		echo($apple->get_color());
		echo('<br>');
		echo($banana->get_color());
	
	
		echo('<h2>Superhero:</h2>');
	
		class superhero {
			// Properties
			public $name;
			public $superpower;
			
			// Methods - same, but using seperate functions
			function set_name($name) {
				$this->name = $name;
			}
			function get_name() {
				return $this->name;
			}
			function set_superpower($superpower) {
				$this->superpower = $superpower;
			}
			function get_superpower() {
				return $this->superpower;
			}
		} 
	
		
	
		// Create objects with the class
		$superhero_one = new superhero();
		$superhero_two = new superhero();
		
		$superhero_one->set_name('Batman');
		$superhero_two->set_name('Superman');
	
		$superhero_one->set_superpower('Night vision');
		$superhero_two->set_superpower('Flying');
	
		echo('<h3>Names:</h3>');
		echo($superhero_one->get_name());
		echo('<br>');
		echo($superhero_two->get_name());
	
		echo('<h3>Superpowers:</h3>');
		echo($superhero_one->get_superpower());
		echo('<br>');
		echo($superhero_two->get_superpower());
	
		class superhero_two {
			// Properties
			public $name;
			public $superpower;
			
			// Constructor
			function __construct($name, $superpower) {
				$this->name = $name;
				$this->superpower = $superpower;
			}
			
		} 
		// Create objects with construct
		echo('<h2>Superhero (set with constuct function):</h2>');
		
		$superhero_three = new superhero_two('Aquaman', 'Talks to marine wildlife');
	
		echo('<h3>Name:</h3>');
		echo($superhero_three->name);

	
		echo('<h3>Superpower:</h3>');
		echo($superhero_three->superpower);
	
		echo('<h2>Superhero (with constuct and destruct functions):</h2>');
	
		class superhero_three {
			// Properties
			public $name;
			public $superpower;
			
			// Constructor
			function __construct($name, $superpower) {
				$this->name = $name;
				$this->superpower = $superpower;
			}
			// Destructor
			function __destruct() {
				echo("The superhero is {$this->name} and thier power is {$this->superpower}.");
			}
		} 
	
//		$superhero_four = new superhero_three('Spiderman', 'Can walk on walls');
	
		echo('<h2>Car:</h2>');
	
		class car {
			// Properties
			public $make;
			public $color;
			public $speed;
			
			// Constructor
			function __construct($make, $color, $speed) {
				$this->make = $make;
				$this->color = $color;
				$this->speed = $speed;
			}
			// Destructor
			function __destruct() {
				echo("The car is a {$this->make}.<br>It's color is: {$this->color}.<br>It's speed is: {$this->speed}");
			}
		} 
		$car = new car('Ferarri', 'Red', '200 mph');
	
	
	?>
<body>
</body>
</html>
