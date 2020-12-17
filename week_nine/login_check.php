<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login check</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
   <?php
        $server_name = "mysql";
        $username = "root";
        $password = "p4ssw0rd1";
        $db_name = "exeter_college_db";

        $connection = new mysqli($server_name, $username, $password, $db_name);
    
        if($connection->connect_error) {
            die("Connection failed: ".$connection->connect_error);
        }
    
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        //Run SQL
    
        $sql_to_run = "SELECT username, password FROM users WHERE username = '$user' AND password = '$pass'";
        $result = $connection->query($sql_to_run);

        $users_array = array();
        $row = $result->fetch_assoc();
        if($row['username'] == $user && $row['password'] == $pass) {
            echo('Successfully logged in. Welcome '.$user.'!');
        } else {
            echo('Login failed');
        }
    
    
    ?>
</body>
</html>