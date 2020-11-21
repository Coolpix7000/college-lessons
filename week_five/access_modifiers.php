<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Access modifiers</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		echo('<h1>Access modifiers</h1>');
		echo('<h2>Fruit:</h2>');
		class fruit {
/*
			public $name; // Access anywhere
			protected $color; // Access with in class and derived classes
			private $weight; // Access within the class
*/
			public $name;
			public $color;
			public $weight;
			
			function set_name() {
				$this->name = $n;
			}
			
			protected function set_color() {
				$this->color = $n;
			}
			
			private function set_weight() {
				$this->weight = $n;
			}
			
		}
		
		$mango = new fruit();
		$mango->name = 'Mango';
		$mango->color = 'Yellow';
		$mango->weight = '300g';
		var_dump($mango);
	
	?>
</body>
</html>