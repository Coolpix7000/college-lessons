<?php
function connect_database() {
    $server_name = "localhost";
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

function get_users($connection, $search = '') {
    $sql_to_run = "SELECT * FROM customers WHERE customer_name LIKE '$search%'";
    $result = $connection->query($sql_to_run);
    
    $users_array = array();
    
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
             $users_array[] = (object) array(
                 'id' => $row["id"],
                 'customer_name' => $row["customer_name"],
                 'address' => $row["address"]
             );
        }
        return $users_array;

    } else {
       return(false);
    }
}

function check_login($connection, $user, $pass) {
    $sql_to_run = "SELECT username, password FROM customers";
    $result = $connection->query($sql_to_run);

    $row = $result->fetch_assoc();
        if($row['username'] == $user && $row['password'] == $pass) {
            return('success');
        } else {
            return('failed');
        }
}


function get_movies($connection, $search = '', $genre = '', $sort_by = '') {
    if($genre) $and = 'AND genres.genre_id = '.$genre;
    else $and = '';
    
    if($sort_by == 'downloads') $order = 'ORDER BY total_downloads DESC';
    else $order = '';
    
    $sql_to_run = "SELECT movies.*, genre, format, file_type, qry_downloads.count_downloads AS total_downloads FROM movies 
                   LEFT JOIN genres ON (genres.genre_id = movies.genre_id)
                   LEFT JOIN video_formats ON (video_formats.type_id = movies.type_id)
                   LEFT JOIN (
                        SELECT downloads.*, COUNT(id) AS count_downloads FROM downloads 
                   ) AS qry_downloads ON (qry_downloads.movie_id = movies.id)
                   WHERE title LIKE '%$search%'
                   $and
                   $order";
    $result = $connection->query($sql_to_run);
    
    $movies_array = array();
    
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
             $movies_array[] = (object) array(
                 'id' => $row["id"],
                 'title' => $row["title"],
                 'genre' => $row["genre"],
                 'format' => $row["format"],
                 'file_type' => $row["file_type"],
                 'total_downloads' => $row["total_downloads"]
             );
        }
        return $movies_array;
    } else {
       return(false);
    }
}
function get_movie($connection, $id) {
    $sql_to_run = "SELECT movies.*, genre, format, file_type FROM movies 
                   LEFT JOIN genres ON (genres.genre_id = movies.genre_id)
                   LEFT JOIN video_formats ON (video_formats.type_id = movies.type_id)
                   WHERE movies.id = $id";
    $result = $connection->query($sql_to_run);
    
    
    if($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $movie = array(
            'id' => $row["id"],
            'title' => $row["title"],
            'genre' => $row["genre"],
            'format' => $row["format"],
            'file_type' => $row["file_type"]
        );
        return $movie;
    } else {
        return false;
    }
}

function get_genres($connection) {
    $sql_to_run = "SELECT * FROM genres";
    $result = $connection->query($sql_to_run);
    
    $genres_array = array();
    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
             $genres_array[] = (object) array(
                 'id' => $row["genre_id"],
                 'genre' => $row["genre"],
             );
        }
        return $genres_array;
    }
}

function insert_user($connection, $name, $uname, $pword, $address) {
    $sql_to_run = "INSERT INTO customers (customer_name, username, password, address)
                  VALUES('$name', '$uname', '$pword', '$address')";
    
    if($connection->query($sql_to_run) === true) {
        return("User created sucessfully");
    } else {
        echo("Error: ".$sql_to_run."<br>".$connection->error);
        die();
    }
}

function insert_movie($connection, $title, $genre_id, $type_id) {
    $sql_to_run = "INSERT INTO movies (title, genre_id, type_id)
                   VALUES('$title', '$genre_id', '$type_id')";
    $result = $connection->query($sql_to_run);
    
    $movies_array = array();
    
    if($connection->query($sql_to_run) === true) {
        return("Movie added sucessfully");
    } else {
        return("Error: ".$sql_to_run."<br>".$connection->error);
    }
}

function remove_user($connection, $name) {

    $sql_to_run = "DELETE FROM customers WHERE customer_name = '$name'";
    $result = $connection->query($sql_to_run);

    if($connection->query($sql_to_run) === true) {
        return("User deleted sucessfullly");
    } else {
        echo("error: ".$sql_to_run."<br>".$connection->error);
        die();
    }
}

function remove_movie($connection, $username) {

    $sql_to_run = "DELETE FROM customers WHERE username = '$username'";
    $result = $connection->query($sql_to_run);

    if($connection->query($sql_to_run) === true) {
        return("User deleted sucessfullly");
    } else {
        return("error: ".$sql_to_run."<br>".$connection->error);
    }
}



?>