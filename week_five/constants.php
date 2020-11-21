<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Constants</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		echo('<h1>Constants</h1>');
	
		class goodbye {
			const LEAVING_MESSAGE = 'Thank you for your time!';
			
			function byebye() {
				echo(self::LEAVING_MESSAGE);
			}
		}
	
		$goodbye = new goodbye();
		$goodbye->byebye();
	?>	
</body>
</html>