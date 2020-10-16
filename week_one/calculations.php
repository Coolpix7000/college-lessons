<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Calculations</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
    <?php
        echo 'This function calculates two values:<br>';
        $number_a = 15;
        $number_b = 20;
        $total = $number_a + $number_b;
        echo $total;
        echo '<br><br>'; // New line
    
        echo 'This function outputs the square root of 81:<br>';
        $number = 81;
        $square_root = sqrt($number_a); // sqrt() finds the square root
        echo($square_root);
        echo '<br><br>'; // New line
    
        echo 'This function outputs 2^16:<br>';
        $number = 2;
        $power = pow($number, 16); // pow() command finds the power of $number by 2
        echo($power);
        echo '<br><br>'; // New line
    
    ?>
</body>
</html>