<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Simple Calculator</title><link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
        <?php  
    
            // Values
            $value_a = 10;
            $value_b = 15;
    
            // Operations
            $add = $value_a + $value_b;
            $subtract = $value_a - $value_b;
            $times = $value_a * $value_b;
            $divide = $value_a / $value_b;
    
            // View
            echo 'First value: '.$value_a.'<br>';
            echo 'Second value: '.$value_b.'<br>';
            echo '<br>'; // New line
    
            // Totals
            echo 'Added: '.$add.'<br>';
            echo 'Subtracted: '.$subtract.'<br>';
            echo 'Multiplied: '.$times.'<br>';
            echo 'Divided: '.$divide.'<br>';
        ?>
</body>
</html>