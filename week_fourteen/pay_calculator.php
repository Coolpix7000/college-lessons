<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pay calculator</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
    <?php
        $hours = 38;
        $rate = 12.7;

        $pay = $hours * $rate;

        echo('Pay: £'.$pay);

    ?>
</body>
</html>