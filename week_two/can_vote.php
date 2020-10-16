<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Can you vote?</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
	<?php
		$your_age = 17;
	
		if($age < 18) {
			echo('No, you cannot yet vote.');
		} else {
			echo('Yes! You can vote.');
		}
	?>
</body>
</html>