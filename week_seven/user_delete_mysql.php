<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>MySQL - Deleting data with UI</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
    <h2>A simple example page to delete data in a MySQL database using PHP</h2>
    <form action="functions/delete_data_function.php" method="post">
        Insert user ID: <input type="text" name="user_id"/><br>
        <input type="submit"/>
    </form>
</body>
</html>