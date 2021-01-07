<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Binary to decimal - Broken</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
    <?php
        $answer = 0;
        $column = 8;

        while($column < 1 || $answer == 0) {
            $bit_value = 1011;
            echo('Enter bit value: '.$bit_value.'<br>');

            $answer = $answer + ($column * $bit_value);
            $column = $column / 2;
        }
        echo('Decimal value is: '.$answer);
   
   
    ?>
</body>
</html>