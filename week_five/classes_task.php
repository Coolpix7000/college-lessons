<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Programming task - Classes</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		echo('<h1>Inheritance</h1>');
		echo('<h2>The simpsons:</h2>');
	
		class the_simpsons {
			public $name;
			public $age;
			
			function __construct($name, $age, $main_trait, $slogan) {
				$this->name = $name;
				$this->age = $age;
				$this->main_trait = $main_trait;
				$this->slogan = $slogan;
			}

			function intro() {
				echo('This character\'s name is:'.$this->name);
			}
		}
	
		class character_traits extends the_simpsons { // Inherits everything from the 'fruit' class and over-rides the intro() function
			public $main_trait;
			public $slogan;
			
			function intro() {
				echo('<br>
					  This character\'s name is '.$this->name.'.<br>
					  This character is '.$this->age.' years old.<br>
					  This character\'s main trait is '.$this->main_trait.'.<br>
					  This character\'s slogan is '.$this->slogan.'.
					  <br>');
			}
		}
		
		$bart = new character_traits('Bart',10,'listens to nobody','Ay karumba!');
		$bart->intro();
	
		$lisa = new character_traits('Lisa',8,'clever','If anyone wants me, I\'ll be in my room');
		$lisa->intro();
	
		$homer = new character_traits('Homer',40,'rage','D\'oh');
		$homer->intro();
	
	?>
</body>
</html>