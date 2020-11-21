<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Encryption - ciphers</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		function encrypt($text, $shift) {
			$result = '';
			//Traverse text
			for($i = 0; $i < strlen($text); $i++) {
				// Apply transformation to each character, encrypt uppercase
				if(ctype_upper($text[$i])) {
					$result = $result.chr((ord($text[$i]) + $shift - 65) % 26 + 65);
				} else {
					// Encrypt lowercase letters
					$result = $result.chr((ord($text[$i]) + $shift - 97) % 26 + 97);
				}
				
			}
			return $result;
		}
	
		function decrypt($text, $shift) {
			$result = '';
			//Traverse text
			for($i = 0; $i < strlen($text); $i++) {
				// Apply transformation to each character, encrypt uppercase
				if(ctype_upper($text[$i])) {
					$result = $result.chr((ord($text[$i]) - $shift - 65) % 26 + 65);
				} else {
					// Encrypt lowercase letters
					$result = $result.chr((ord($text[$i]) - $shift - 97) % 26 + 97);
				}
				
			}
			return $result;
		}
	
		echo('<h2>Caesar cipher: </h2>');
		$text = 'ATTACKATONCE';
		$shift = 4;
	
		echo('<br>Text (unencrypted): '.$text);
		echo('<br>Shift: '.$shift);
		echo('<br>Result (encrypted): '.$encrypted = encrypt($text, $shift));
	
		echo('<br><br>');

		echo('<br>Text (encrypted): '.$encrypted);
		echo('<br>Shift: '.$shift);
		echo('<br>Result (unencrypted): '.decrypt($encrypted, $shift));
	
	
		echo('<h2>Vernam cipher: </h2>');
		
		$text = 'Y';
		$key = 'H';
	
		
		function vernam_cipher($string, $key) {
			
			$split = str_split($string);
			
			$ascii = ord($key);
			$binary_key = decbin($ascii);
			$key_array = str_split($binary_key);
//			var_dump($key_array);
			
			foreach($split as $char) { // Compare each letter
				
				$ascii = ord($char);
				$binary = decbin($ascii);
				$binary_split = str_split($binary);
				
				$swapped_binary_array = array();
					
//				var_dump($binary_split);
				foreach($binary_split as $bkey => $value) {
//					var_dump($value);
					if($value == $key_array[$bkey]) {
						$new_value = 0;
					} else {
						$new_value = 1;
					}
					$swapped_binary_array[$bkey] = $new_value;
				}
				
//				var_dump($swapped_binary_array);
				$binary_swapped = (int) implode($swapped_binary_array);
				$decimal = bindec($binary_swapped);
				$letter = chr($decimal);
//				var_dump($decimal);
				
				
			}
			
			
//			$result = implode($split_result);
//			return $result;
		}
		vernam_cipher($text, $key);
	
		
		
	?>
</body>
</html>
