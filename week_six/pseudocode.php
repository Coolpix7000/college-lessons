<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pseudocode</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
		echo('<h1>Pseudocode</h1>');
		echo('<h2>How far to count?</h2>');
    
        // Set the variable
		$how_far = 0;
    
        if($how_far < 1) { // If this is a while, it will infinately repeat. 
            echo('Not a valid number, please try again.<br>');
            
            // Set the variable again
            $how_far = 5;
        }

        for($i = 0; $i <= $how_far; $i++) {
            if($i % 3 == 0 && $i % 5 == 0) {
                echo('FizzBuzz<br>');
                break;
            } else if($i % 3 == 0) { 
                echo('Fizz<br>');
                break;
            } else if($i % 5 == 0) {
                echo('Buzz<br>');
                break;
            } else {
                echo($i.'<br>');
                break;
            }
        }
    
    //Insert image at bottom of page
	?>	
    <img class="ppt_img" src="../resources/images/pseudo.jpg">
</body>
</html>