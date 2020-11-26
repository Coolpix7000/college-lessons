<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Database connection</title>
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
    
        $name = 'Kevin';
        $password = 'Bac0n';
    
        $sql_to_run = "INSERT INTO users (username, password)
                       VALUES('$name', '$password')";
    
        if($connection->query($sql_to_run) === true) {
            echo("Record created sucessfullly");
        } else {
            echo("error: ".$sql_to_run."<br>".$connection->error);
        }
            
        $connection->close();
    
	?>
</body>
</html>