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

    $id = $_POST['user_id'];

    //LEFT JOIN tables
    $sql_to_run = "DELETE FROM users WHERE id = $id";

    if($connection->query($sql_to_run) === true) {
        echo('Deleted sucessfully');
    } else {
        echo("error: ".$sql_to_run."<br>".$connection->error);
    }

    $connection->close();

?>