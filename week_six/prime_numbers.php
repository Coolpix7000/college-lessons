<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Programming task - Prime numbers/Fibonacci</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
        //BROKEN
//		echo('<h2>Prime numbers</h2>');
		
        $inserted_number = 200;
//        prime_numbers($inserted_number);
    
        function prime_numbers($number) {
            
            for($i = 0; $i <= $number; $i++) {
                $square_root = sqrt($i);
                if($square_root % $i == 0) {
                    echo($i);
                } else {
                    continue;
                }
            }
        }
    
        echo('<h2>Fibonacci</h2>');
    
        fibonacci($inserted_number);
            
        function fibonacci($number) {
            $x = 0;
            $y = 1;
            for($i = 0; $i <= $number; $i++) {
                $z = $x + $y;
                echo($z.'<br>');
                
                $x=$y;
                $y=$x;
            }
        }
        
    
        
    
	?>
</body>
</html>