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
		echo('<h1>Static methods and properties</h1>');
		echo('<h2>Pi:</h2>');
			
		class pi {
			public static $value = 3.14159;
			public function static_value() {
				return self::$value;
			}
		}
	
		$pi = new pi();
		echo($pi->static_value());
	
		echo('<h2>Domain:</h2>');
	
		class domain {
			protected static function get_website_name() {
				return 'Facebook.com';
			}
		}
	
		class domain_fb extends domain {
			public $website_name;
			public function __construct() {
				$this->website_name = parent::get_website_name();
			}
		}
	
		$domain_fb = new domain_fb;
		echo $domain_fb->website_name;
			
	?>
</body>
</html>