<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sorting algorithms 2</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		$unsorted_array = array(1,47,7,5,6,23,10,98,34,16,3,80,4);
	
		function selection_sort($array) {
			$array_size = count($array);
			
			// Check if current element to be minimum
			for($i = 1; $i < $array_size - 1; $i++) {
				
				for($ii = $i + 1; $ii < $array_size; $ii++) {
					if($array[$ii] < $array[$i]) {
						// Set current element as minimum
						$min = $array[$ii];
						$array[$ii] = $array[$i];
						$array[$i] = $min;
					}
				}
			}
			
			return $array;
		}
	
		function insertion_sort($array) {
			$array_size = count($array);
			
			for($i = 1; $i < $array_size; $i++) {
				
				$ii = $i - 1;
				$key = $array[$i];
				
				while($ii >= 0 && $array[$ii] > $key) {
						// Swap the items
						$array[$ii + 1] = $array[$ii];
						$ii = $ii - 1;
				}
				$array[$ii + 1] = $key;
			}
			
			return $array;
		}

		echo('<h3>Selection sort:</h3>');
		echo('Original array:<br>');
		display_array($unsorted_array, 'one_line');
	
		echo('<br><br>Sorted array:<br>');
		$sorted_array = selection_sort($unsorted_array);
		display_array($sorted_array, 'one_line');
	
	
		echo('<h3>Insertion sort:</h3>');
		echo('Original array:<br>');
		display_array($unsorted_array, 'one_line');
	
		echo('<br><br>Sorted array:<br>');
		$sorted_array = insertion_sort($unsorted_array);
		display_array($sorted_array, 'one_line');
	?>
</body>
</html>