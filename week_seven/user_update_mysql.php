<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>MySQL - Updating data with UI</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
    <h2>A simple example page to update some data in a MySQL database using PHP</h2>
    <form action="functions/update_data_function.php" method="post">
        Username: <input type="text" name="name"/><br>
        Password: <input type="text" name="pass"/><br>
        <input type="hidden" name="_method" value="put"/>
        <input type="submit"/>
    </form>
</body>
</html>