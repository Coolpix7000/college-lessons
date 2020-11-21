<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Interface task</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		echo('<h1>Interface task</h1>');
		
		interface shape {
			function return_area();
		}
	
		class circle implements shape {
			private $radius;
			function __construct($radius) {
				$this->radius = $radius;
			}
			function return_area() {
				echo(($this->radius * 3.14159)^2);
			}
		}
	
		class square implements shape {
			private $height;
			private $width;
			function __construct($height, $width) {
				$this->height = $height;
				$this->width = $width;
				
			}
			function return_area() {
				echo($this->width * $this->height);
			}
		}
		// Create a list of shapes
		$square = new circle(10);
		$circle = new square(10,15);
	
		echo('Square area:<br>');
		$square->return_area();
		echo('<br>');
	
		echo('Circle area:<br>');
		$circle->return_area();
		echo('<br>');

	?>
</body>
</html>