<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Database connection</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
        $isbn = array();
    
        for($i = 1; $i <= 13; $i++) {
			echo('Please enter next digit of ISBN number:<br>');
            $isbn[$i] = rand(1,9); // 'Fake' input
            echo($isbn[$i].'<br>'); // Display number
		}
        
        $calculated_digit = 0;
    
        $count = 0;
    
        while($count < 13) {
            $calculated_digit = $calculated_digit + $isbn[$count];
            $count++;
                
            $calculated_digit = $calculated_digit + $isbn[$count] * 3;
            $count++;
            
            if($count == 500) die(); // Kill if we get stuck in the loop
        } 
    
        while($calculated_digit >= 10) {
            $calculated_digit = $calculated_digit - 10;
            
        }
    
        $calculated_digit = 10 - $calculated_digit;
    
        if($calculated_digit = 10) {
            $calculated_digit = 0;
        }
        if($calculated_digit == $isbn[13]) {
            echo('Valid ISBN');
        } else {
            echo('Invalid ISBN');
        }
    
	?>
</body>
</html>