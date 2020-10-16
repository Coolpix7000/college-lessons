<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Day of the week</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
	<?php
		$day = 4;
		
		switch($day) {
			case 1: 
				echo('Monday');
				break;
			case 2: 
				echo('Tuesday');
				break;
			case 3: 
				echo('Wednesday');
				break;
			case 4: 
				echo('Thursday');
				break;
			case 5:
				echo('Friday');
				break;
			case 6: 
				echo('Saturday');
				break;
			case 7: 
				echo('Sunday');
				break;
			default:
				echo('Invalid number');
		}
	?>
</body>
</html>