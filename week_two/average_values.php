<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Average values</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
<?php
	//Ten values
	$value_one = 19;
	$value_two = 5;
	$value_three = 2;
	$value_four = 6;
	$value_five = 13;
	$value_six = 9;
	$value_seven = 3;
	$value_eight = 16;
	$value_nine = 12;
	$value_ten = 7;
	
	$total = $value_one + $value_two + $value_three + $value_four + $value_five + $value_six + $value_seven + $value_eight + $value_nine + $value_ten;
	$average = $total / 10;
	
	echo('Average of ten values:</br>');
	echo($average);
?>
</body>
</html>
