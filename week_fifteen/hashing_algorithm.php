<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hashing alogrithm</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
   <?php
        error_reporting(E_ALL ^ E_WARNING); // Stop GET and POST errors
        /*
        Hashing example tutorials:
        https://alexwebdevelop.com/php-password-hashing/

        */
        $server_name = "localhost";
        $username = "root";
        $password = "p4ssw0rd1";
        $db_name = "hashing_passwords";

        $connection = new mysqli($server_name, $username, $password, $db_name);

    
        if($connection->connect_error) {
            die("Connection failed: ".$connection->connect_error);
        }

        $content = '<form method="post" action="?hash=true">
                        Username: <input type="text" id="username" length="15" /><br>
                        Password (numerical): <input type="password" id="password length="15" />
                        <input type="submit" value="Go" />
                    </form>';

        $username = $_POST['username'];
        $password = $_POST['password'];
        
        //Algorithm
        if($_GET['hash'] == true) {
        
            // Run SQL - insecure
            $sql_to_run = "INSERT INTO simple_hash (index, key, username) VALUES ($index, $hash, $username)";

            if($connection->query($sql_to_run) === true) {
                $content .= '<br><br>Executed sucessfully';
            } else {
                echo("error: ".$sql_to_run."<br>".$connection->error);
                die();
            }
        }
        
    
        echo($content);
    ?>
</body>
</html>