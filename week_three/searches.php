<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Search algorithms</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
	
		// Set the array to search and the search term
		$to_search = array(6,4,8,9,10,23,19,7,12,1);
		$search = 12;
	
		echo('<h3>Linear search:</h3>');
		$count = 0;
		foreach($to_search as $item) {
			$count++;
			if($item == $search) {
				echo('Item found: '.$search.'. It\'s position '.$count.' in the array.');
				break;
			} else if($count == count($to_search)) {
				echo('Not found. You searched for: '.$search);
			}
		}	
	
		echo('<br><h3>Binary search:</h3>');

//		Code from week 3 (broken):
	
//		$start_no = 1;
//		$array_count = count($to_search);
//		$found = '';
//		
//		$temp = 0;
//	
//		while($search != $found) {
//			$temp++;
//			if($array_count < $start_no) {
//				echo('Not found. You searched for: '.$search);
//				break;
//			}
//			
//			$mid_point = $start_no + (($array_count - $start_no) / 2);
//			
//			$found = '';
//			
//			if($to_search[$mid_point] < $search) {
//				$start_no = $mid_point + 1;
//			} else if($to_search[$mid_point] > $search) {
//				$start_no = $mid_point - 1;
//			} else if($to_search[$mid_point] == $search) {
//				echo('Found at location: '.$mid_point);
//				break;
//			}
//			
//			if($temp == 5000) { //Kill the loop if we get stuck
//				die();
//			}
//		}
	
		function binary_search($array, $search_value) {
			
			$start_no = 1;
			$array_count = count($array) - 1; // Adding the -1 here fixed it
			$found = '';

			$loop_limit = 0;
		
			while($search_value != $found) {
				$loop_limit++;
				if($array_count < $start_no) {
					return false;
					break;
				}

				$mid_point = $start_no + (($array_count - $start_no) / 2);

				$found = '';

				if($array[$mid_point] < $search_value) {
					$start_no = $mid_point + 1;
				} else if($array[$mid_point] > $search_value) {
					$start_no = $mid_point - 1;
				} else if($array[$mid_point] == $search_value) {
					return true;
					break;
				}

				if($loop_limit == 5000) { // Kill the loop if we get stuck
					die();
				}
			}
		}
	
		// Run the binary search function - Driver code
		if(binary_search($to_search, $search)) echo($search.' found.');
		else echo($search.' not found.');
			
	?>
</body>
</html>