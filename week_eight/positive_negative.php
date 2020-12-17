<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Positive or negative number</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
    <?php
        $number = 0;
        while($number < 1 || $number > 10) {
            echo('Enter a positive whole number:<br>');
            $number = 8;
            echo($number);
            if($number > 10) {
                echo('Number too large<br>');
            } else if($number < 1) {
                echo('Not a positive number<br>');
            }
        }

        $c = 1;
        for($k = 0; $k <= $c; $k++) {
            echo($c.'<br>');
            $c = ($c * ($number - 1 - $k)) / ($k + 1);
        }
    
    ?>
</body>
</html>