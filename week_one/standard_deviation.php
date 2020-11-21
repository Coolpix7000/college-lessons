<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Standard deviation</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
    <?php
        $value_a = 1;
        $value_b = 2;
        $value_c = 3;
        $value_d = 4;
        $value_e = 5;
        $value_f = 6;
        $value_g = 7;
        $value_h = 8;
        $value_i = 9;
        $value_j = 10;
        $value_k = 11;
        $value_l = 12;
        $value_m = 13;
        $value_n = 14;
        $value_o = 15;
        $value_p = 16;
    
        //Equasion: (a + b + c)/3
    
        //Function: 
        $added_numbers = $value_a + $value_b + $value_c + $value_d + $value_e + $value_f + $value_g + $value_h + $value_i + $value_j + $value_k + $value_l + $value_m + $value_n + $value_o + $value_p;
    
        $deviation_complete = sqrt($added_numbers / 16);
        
        echo('Standard deviation of numbers ');
        
        echo(' is: '.$deviation_complete);
    ?>
</body>
</html>
