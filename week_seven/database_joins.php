<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>MySQL - JOIN statements</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../global_functions.php'); ?>
</head>
<body>
	<?php 
    
        $server_name = "mysql";
        $username = "root";
        $password = "p4ssw0rd1";
        $db_name = "movies_db";
        
        // Create connection & check for errors
        $connection = new mysqli($server_name, $username, $password, $db_name);
    
        // Run a query
        if($connection->connect_error) {
            die("Connection failed: ".$connection->connect_error);
        }
    
        //LEFT JOIN tables
        $sql_to_run = "SELECT customer_name, address, movies.title AS movie_title
                       FROM customers
                       LEFT JOIN downloads ON (downloads.customer_id = customers.id)
                       LEFT JOIN movies ON (movies.id = downloads.movie_id)
                       WHERE customers.id = 1
                       ORDER BY date";
        $result = $connection->query($sql_to_run);
    
        echo('<h2>LEFT JOIN customers to movies:<br></h2>');
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                var_dump($row);
                echo('<br>');
            }
        } else {
            echo("error: ".$sql_to_run."<br>".$connection->error);
        }
            
        
        $sql_to_run = "SELECT title, genre, format
                       FROM movies
                       LEFT JOIN genres ON (genres.genre_id = movies.genre_id)
                       LEFT JOIN video_formats ON (video_formats.type_id = movies.type_id)
                       WHERE movies.type_id = 2
                       ORDER BY movies.title ASC";
        $result = $connection->query($sql_to_run);
    
        echo('<h2>LEFT JOIN movies to video_formats:<br></h2>');
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                var_dump($row);
                echo('<br>');
            }
        } else {
            echo("error: ".$sql_to_run."<br>".$connection->error);
        }
            
        $connection->close();
    
	?>
</body>
</html>