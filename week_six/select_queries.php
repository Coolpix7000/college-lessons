<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Databases connection - SELECT</title>
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
    
        $sql_to_run = "SELECT id, username, password FROM users";
        $result = $connection->query($sql_to_run);
    
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo('ID: '.$row['id'].'<br>Username: '.$row['username'].'<br>Password: '.$row['password'].'<br><br>');
            }
        } else {
            echo("error: ".$sql_to_run."<br>".$connection->error);
        }
            
        $connection->close();
    
	?>
</body>
</html>