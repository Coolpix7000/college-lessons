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
        $names[1] = 'Ben';
        $names[2] = 'Thor';
        $names[3] = 'Zoe';
        $names[4] = 'Kate';
    
        $found = false;
        
        echo('What player are you looking for?<br>');
        $input_name = 'Ben';
        echo($input_name.'<br>');
    
        $max = 4;
        $current = 1;
    
        while($found == false && $current <= $max) {
            if($names[$current] == $input_name) {
                $found = true;
            } else {
                $current++;
            }
        }
        if($found == true) {
            echo('Yes, they have a top score.<br>');
        } else {
            echo('No, they do not have a top score.<br>');
        }
    
    ?>
</body>
</html>