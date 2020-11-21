<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Abstract classes</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		echo('<h1>Abstract classes</h1>');
		
		//Parent class
	
		abstract class car {
			public $name;
			public function __construct($name) {
				$this->name = $name;
			}
			abstract public function intro();
		}
	
		//Child classes
		
		class audi extends car {
			public function intro() {
				return 'Audi! I\'m A ';
			}
		}
	
		class volvo extends car {
			public function intro() {
				return 'Volvo! I\'m A ';
			}
		}
	
		class citroen extends car {
			public function intro() {
				return 'Citroen! I\'m A ';
			}
		}
	
		
		
		
		$audi = new audi('Audi');
		echo $audi->intro();
		echo('<br>');
	
		$volvo = new volvo('Volvo');
		echo $volvo->intro();
		echo('<br>');
	
		$citroen = new citroen('Citroen');
		echo $citroen->intro();
		echo('<br>');
	?>	
</body>
</html>