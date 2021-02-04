<?php
// Used a tutorial for login: https://codeshack.io/secure-login-system-php-mysql/

    // Set up session
    if($_GET['action']) $action = $_GET['action'];
    else $action = false;

    session_start(); // Start the session

    if($action == 'logout') {
        $_SESSION = array();
        session_destroy();
        echo('<div style="text-align: center;">Successfully logged out.
              <br>Page will redirect in 3 seconds...</div>');
        header("refresh:3;url=index.html");
        die();
    } else if($action == 'login' || $action == 'reset_password' || $action == 'request_token') {

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

        if($action == 'login') {
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

        } else if($action == 'request_token') {
            if (!isset($_POST['username']) ) {
                exit('Please fill in a username!');
            }
            if($q = $con->prepare('SELECT id FROM customers WHERE username = ?')) {
                $q->bind_param('s', $_POST['username']);
                $q->execute();
                $result = $q->get_result();
                $row = $result->fetch_array(MYSQLI_ASSOC);
                $user_id = $row['id'];
                $q->close();
            }

            for($i = 0; $i <= 100; $i++) {
                // Generate a random 30 character string
                $length = 30;
                $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $auth_key = '';
                $max = mb_strlen($keyspace, '8bit') - 1;
                if ($max < 1) {
                    throw new Exception('$keyspace must be at least two characters long');
                }
                for ($i = 0; $i < $length; ++$i) {
                    $auth_key .= $keyspace[random_int(0, $max)];
                }

                // MAKE THIS SECURE
                $sql_to_run = "INSERT INTO customer_reset_requests (customer_id, token) VALUES ('$user_id', '$auth_key');";
                // $sql->bind_param(':id', $user_id);
                // $sql->bind_param(':key', $auth_key);

                if($con->query($sql_to_run) === true) {
                    // $con->close();
                    echo("Token generated");
                } else {
                    echo("Error: ".$sql_to_run."<br>".$con->error);
                    die();
                }
            }
        } else {

        }
    }
?>