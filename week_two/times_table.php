<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Times tables</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
	<?php
		$number = 6;
		echo($number.' times tables using for loop:<br><br>');
		for($i = 1; $i <= 12; $i++) {
			$total = $number * $i;
			echo($number.' times '.$i.' = '.$total.'<br>');
		}
	?>
</body>
</html>