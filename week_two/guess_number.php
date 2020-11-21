<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Guess the number</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php date_default_timezone_set('Europe/London'); ?>
	<script type="text/javascript">
		function add_parameter(number, value){
			const urlParams = new URLSearchParams(window.location.search);

			urlParams.set('number_'+number, value);

			window.location.search = urlParams;
		}
	</script>
</head>
<body>
	<h2>Guess the number?</h2>
	<p>Number is between 1 &amp 20.</p>
<!--
	<button onclick="add_parameter(1)">Test</button>
	<button onclick="add_parameter(2)">Test</button>
-->
	<?php
//		$magic_number = rand(1,20);
		$magic_number = 8;
		$i=1;
		while($i <= 5) {
			form($i,$i+1);
			$i++;
		}
			
		function form($attempt_number, $previous_value) {
			echo('
				<form method="get" autocomplete="off" id="form_'.$attempt_number.'">
					<label>Input number:</label>
					<input type="text" id="temp" name="temp">
					<button onclick="add_parameter('.$attempt_number.','.$attempt_number.');">Go</button>
				</form>
			');
		}
	
//		function check($attempt_number) {
//			if($attempt_number == 5) {
//				echo('You have run out of attempts. Reload page to try again!');
//				die();
//			} else {
//				$guess = (int) $_GET['number_'.$attempt_number];
//				if($guess == $magic_number) {
//					echo('Congratulations! '.$magic_number.' was the correct answer!<br>');
//					die();
//				} else {
//					echo('That was incorrect! You have '.abs($attempt).' attempts remaining.<br><br>');
//				}
//			}
//		}
		
	?>
</body>
</html>
