<?php
// Used a tutorial for this: https://codeshack.io/secure-login-system-php-mysql/

    if($_GET['action']) $action = $_GET['action'];
    else $action = false;

    if($action == 'logout') {
        session_start();
        $_SESSION = array();
        session_destroy();
        echo('<div style="text-align: center;">Successfully logged out.<br>Page will direct in 3 seconds...</div>');
        header("refresh:3;url=index.html");
        die();
    }

    session_start(); // Start the session

    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASS = 'p4ssw0rd1';
    $DB_NAME = 'movies_db';
    // Try and connect using the info above.
    $con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
    if(mysqli_connect_errno()) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }

    // Now we check if the data from the login form was submitted, isset() will check if the data exists.
    if (!isset($_POST['username'], $_POST['password']) ) {
        // Could not get the data that should have been sent.
        exit('Please fill both the username and password fields!');
    }

    // Prepare our SQL, preparing the SQL statement will prevent SQL injection.
    if ($q = $con->prepare('SELECT id, password FROM customers WHERE username = ?')) {
        // Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
        $q->bind_param('s', $_POST['username']);
        $q->execute();
        // Store the result so we can check if the account exists in the database.
        $q->store_result();
        
        if ($q->num_rows > 0) {
            $q->bind_result($id, $password);
            $q->fetch();
            // Account exists, now we verify the password.
            // Note: remember to use password_hash in your registration file to store the hashed passwords.
            if($_POST['password'] === $password) {
                // Verification success! User has logged-in!
                // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
                session_regenerate_id();
                $_SESSION['loggedin'] = true;
                $_SESSION['name'] = $_POST['username'];
                $_SESSION['id'] = $id;

                header('Location: private/home.php');
            } else {
                // Incorrect password
                echo 'Incorrect username and/or password!';
            }
        } else {
            // Incorrect username
            echo 'Incorrect username and/or password!';
        }

        $q->close();
    }
?>