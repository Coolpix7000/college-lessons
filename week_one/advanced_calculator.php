<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Simple Calculator</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
</head>
<body>
    <form method="get">
        First number:
        <input type="text" size="15" id="first" name="first"></br>
        Second number:
        <input type="text" size="15" id="second" name="second"></br>
        Actions:<br>
        <input type="radio" name="action" id="add" value="add">
        <label for="add">+</label><br>
        <input type="radio" name="action" id="subtract" value="subtract">
        <label for="subtract">-</label><br>
        <input type="radio" name="action" id="times" value="times">
        <label for="times">&times;</label><br>
        <input type="radio" name="action" id="divide" value="divide">
        <label for="divide">&divide;</label><br>
        <?php

            
    
            echo('
                <br>
                <input type="submit">
                </form>');
            echo $equals;
        ?>
</body>
</html>