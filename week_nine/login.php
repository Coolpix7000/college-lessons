<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login test</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
    <h2>Login page</h2>
    <form action="login_check.php" method="post">
        <input type="hidden" id="action" name="action" value="login">
        <p>
            Username:
            <input type="text" id="user" name="user"/>
        </p>
        <p>
            Password:
            <input type="password" id="pass" name="pass"/>
        </p>
        <p style="margin-left:80px;">
            <input type="submit" id="submit" value="Login">
        </p>
    </form>
</body>
</html>