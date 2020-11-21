<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Superclass task</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		echo('<h1>Static methods and properties</h1>');
		
		abstract class vehicle {
			public $tonnage;
			public $wheels;
			
			public function __construct($tonnage, $wheels) {
				$this->tonnage = $tonnage;
				$this->wheels = $wheels;
			}
			abstract public function intro();
		}
		
		class motorbike extends vehicle {
			public function intro() {
				return 'Motorbike: <br>
						Tonnage: '.$this->tonnage.'<br>
						Wheels: '.$this->wheels.'<br>';
			}
		}
	
		class car extends vehicle {
			public function intro() {
				return 'Car: <br>
						Tonnage: '.$this->tonnage.'<br>
						Wheels: '.$this->wheels.'<br>';
			}
		}
	
		class lorry extends vehicle {
			public function intro() {
				return 'Lorry: <br>
						Tonnage: '.$this->tonnage.'<br>
						Wheels: '.$this->wheels.'<br>';
			}
		}
		
		$motorbike = new motorbike(0.1,2);
		echo $motorbike->intro();
		echo('<br>');
	
		$car = new car(2,4);
		echo $car->intro();
		echo('<br>');
	
		$lorry = new lorry(10,8);
		echo $lorry->intro();
		echo('<br>');
	
	
	?>
</body>
</html>