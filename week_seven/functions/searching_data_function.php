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

    $pass = $_POST['pass'];

    //LEFT JOIN tables
    $sql_to_run = "SELECT username, password
                   FROM users
                   WHERE password = '$pass'
                   ORDER BY username ASC";
    $result = $connection->query($sql_to_run);

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            var_dump($row);
        }
    } else {
        echo("error: ".$sql_to_run."<br>".$connection->error);
    }

    $connection->close();

?>