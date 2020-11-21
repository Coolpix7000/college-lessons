<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Grade calculator</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
	<?php
		$grade = 75;
	
		if($grade >= 70) {
			echo('Distinction');
		} else if($grade >= 55 && $grade < 70 ) {
			echo('Merit');
		} else if($grade >= 40 && $grade < 55 ) {
			echo('Pass');
		} else if($grade < 40) {
			echo('Fail');
		}
	
	?>
</body>
</html>