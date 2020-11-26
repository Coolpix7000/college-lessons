<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Databases connection - SELECT WHERE ORDER BY</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
    
        $server_name = "mysql";
        $username = "root";
        $password = "p4ssw0rd1";
        $db_name = "exeter_college_db";
        
        // Create connection & check for errors
        $connection = new mysqli($server_name, $username, $password, $db_name);
    
        // Run a query
        if($connection->connect_error) {
            die("Connection failed: ".$connection->connect_error);
        }
    
        $sql_to_run = "UPDATE users SET password = 'Appl3' WHERE username = 'matthew'";
        $result = $connection->query($sql_to_run);
    
        if($connection->query($sql_to_run) === true) {
            echo("Record updated sucessfullly");
        } else {
            echo("error: ".$sql_to_run."<br>".$connection->error);
        }
            
        $connection->close();
    
	?>
</body>
</html>