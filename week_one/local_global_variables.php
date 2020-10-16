<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Local &amp Global variables</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
    <?php
        $x_global = 5; // Global scope
        $y_global = 10;    
    
        function my_test() { //Doesn't work unless you pass the function $x
            // Using x inside a function will generate an error
            echo "<p>Variable x_global inside function is: $x_global</p>"; // Use double quotes when using variables in echo
        }
        my_test();
        echo "<p>Variable x_global outside function is: $x_global</p>";
        echo '<br><br>'; // New line
    
    
        echo 'Second, fixed function:<br>';
        function my_test_two() { 
            global $x_global, $y_global;
            $y_global = $x_global + $y_global;
        }
        my_test_two();
        echo $y_global; // Outputs 15
        echo '<br><br>'; // New line
    
    
        function my_test_three() { 
            $x_local = 5;
            echo "<p>Variable x_local inside function is: $x_local</p>"; 
        }
        my_test_three();
        echo "<p>Variable x_local outside function is: $x_local</p>";
        echo '<br><br>'; // New line
    ?>
</body>
</html>