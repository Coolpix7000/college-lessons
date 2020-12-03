<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>MySQL - Searching data with UI</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
    <h2>A simple example page to search for some data in a MySQL database using PHP</h2>
    <form action="functions/searching_data_function.php" method="post">
        Password: <input type="text" name="pass"/><br>
        <input type="submit"/>
    </form>
</body>
</html>