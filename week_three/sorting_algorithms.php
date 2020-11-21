<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sorting algorithms</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php
		$to_sort = array(6,4,8,9,10,23,19,7,12,1);
		
		echo('Given values: <br>');
		display_array($to_sort, 'one_line');
	
		//Bubble
		echo('<h2>Bubble sort:</h2>');
	
		echo('Sorted values:<br>');
		for($pass = 0; $pass < (count($to_sort) - 1); $pass++) {
			for($i = 0; $i < (count($to_sort) - 1); $i++) {
				if($to_sort[$i] > $to_sort[$i + 1]) {
					$temp = $to_sort[$i];
					$to_sort[$i] = $to_sort[$i+1];
					$to_sort[$i+1] = $temp;
				}
			}
		}
		display_array($to_sort, 'one_line');
		
		//Merge
		echo('<h2>Merge sort:</h2>');
	
		function merge_sort() {
			
		}
	
		display_array($to_sort, 'one_line');
	
		//Quick
//		echo('<h2>Quick sort:</h2>');
	

	?>
</body>
</html>