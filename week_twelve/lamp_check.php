<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Lamp check</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
    <?php
        echo("Lamp doesn't work?<br><br>");

        $check_plug = 'Yes';

        echo("Lamp plugged in? ".$check_plug."<br>");

        if($check_plug == 'No') {
            echo("Plug in lamp.<br>");
        } else if($check_plug == 'Yes')  {

            $check_bulb = 'Yes';

            echo("Bulb burned out? ".$check_bulb."<br>");

            if($check_bulb == 'Yes') {
                echo("Replace bulb.<br>");
            } else {
                echo("Buy new lamp.<br>");
            }
        }

       

    ?>
</body>
</html>