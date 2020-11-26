<?php
function connect_database() {
    $server_name = "mysql";
    $username = "root";
    $password = "p4ssw0rd1";
    $db_name = "movies_db";

    // Create connection & check for errors
    $connection = new mysqli($server_name, $username, $password, $db_name);

    if($connection->connect_error) {
        die("Connection failed: ".$connection->connect_error);
    }
        
    return $connection;
}

function disconnect_database($connection) {
    $connection->close();
    return true;
}

function get_users($connection) {
    $sql_to_run = "SELECT * FROM customers";
    $result = $connection->query($sql_to_run);
    
    $users_array = array();
    
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
             $users_array[] = (object) array(
                 $row["id"],
                 $row["customer_name"],
                 $row["address"]
             );
        }
        return $users_array;

    } else {
       return('No users found');
    }
}

function insert_user($connection, $name, $address) {
    $sql_to_run = "INSERT INTO customers (customer_name, address)
                  VALUES('$name', '$address')";
    
    if($connection->query($sql_to_run) === true) {
        return("User created sucessfully");
    } else {
        return("Error: ".$sql_to_run."<br>".$connection->error);
    }
}



function delete_SOMETHING($connection) {
        
        $sql_to_run = "DELETE FROM users WHERE username = 'Kelly'";
        $result = $connection->query($sql_to_run);
    
        if($connection->query($sql_to_run) === true) {
            echo("Record deleted sucessfullly");
        } else {
            echo("error: ".$sql_to_run."<br>".$connection->error);
        }
}











?>