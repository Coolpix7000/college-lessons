<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Movies database</title>
    <?php include_once('model/db_functions.php'); ?>
    <?php include_once('model/view_functions.php'); ?>
    <link rel="stylesheet" type="text/css" href="assets/css/foundation.css">
</head>
<body>
	<?php 
        $connection = connect_database();
        $content = '<h1>Movie database</h1>';
            
        if($_GET['view'] == '') {
            $content .= '<h2>Login page</h2>
                        <form action="actions/db_actions.php">
                            <input type="hidden" id="action" name="action" value="login">
                            <p>
                                Username:
                                <input type="text" id="user" name="user"/>
                            </p>
                            <p>
                                Password:
                                <input type="password" id="pass" name="pass"/>
                            </p>
                            <p>
                                <input type="submit" id="submit" value="Login" class="button">
                            </p>
                        </form>
                        <a class="button" href="index.php?view=reset_password">Reset password</a>
                        ';
        } else if($_GET['view'] == 'reset_password') {
            $content .= '<h2>Reset password</h2>
                        <form action="actions/db_actions.php">
                            <input type="hidden" id="action" name="action" value="reset_password">
                            <p>
                                Username:
                                <input type="text" id="user" name="user"/>
                            </p>
                            <p>
                                Password:
                                <input type="password" id="pass" name="pass"/>
                            </p>
                            <p>
                                <input type="submit" id="submit" value="Reset & login" class="button">
                            </p>
                        </form>
                        <a class="button">Reset password</a>
                        ';
        } else if($_GET['view'] == 'failed_login') {
            $content .= '<h2>Login failed</h2>
                <a class="button" href="index.php?view=">Go back</a>';
        } else if($_GET['view'] == 'home') {
            $content .= '<h2>Home</h2>
                         <a class="button" href="index.php?view=view_users">View users</a><br>
                         <a class="button" href="view/movies.php">View movies</a>';
        } else if($_GET['view'] == 'view_users') {
            $content .= '<h2>Users</h2>
                <form id="search_users" method="post" action="?view=view_users">
                    Name: <input type="text" id="search" name="search" placeholder="Search name">
                    <input type="submit" value="Search">
                </form>
                <br>';
            $users = get_users($connection, $_POST['search']);
            if($users) {
                // Create table
                 $content .= '<table border="1">
                                <tr>   
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Address</th>
                                </tr>
                             ';
                foreach($users as $user) {
                    $content .= '<tr>
                                    <td>'.$user->id.'</td>
                                    <td>'.$user->customer_name.'</td>
                                    <td>'.$user->address.'</td>
                                </tr>';
                }
                $content .= '<table>'; // Close table
            } else {
                echo('No users found.');
            }
           
            $content .= '<a class="button" href="index.php?view=users_add">Add user</a><br>
                         <a class="button" href="index.php?view=users_remove">Remove user</a>';
            $content .= home_button();
            
        //Edit pages ->
        } else if($_GET['view'] == 'users_add') {
            $content .= '<h2>Add users</h2>';
            $content .= '<form id="add_user" method="get" action="actions/db_actions.php">
                            <input type="hidden" id="action" name="action" value="add_customer">
                            Name:  <input type="text" id="name" name="name"><br>
                            Address:  <input type="text" id="address" name="address"><br>
                            <input type="submit" value="Add user">
                         </form>';
            $content .= home_button();
            
        } else if($_GET['view'] == 'users_remove') {
            $content .= '<h2>Remove users</h2>';
            
            $content .= home_button();
            
        } else if($_GET['view'] == 'movies_add') {
            $content .= '<h2>Add movies</h2>';
            
            $content .= home_button();
            
        } else if($_GET['view'] == 'movies_remove') {
            $content .= '<h2>Remove movies</h2>';
            
            $content .= home_button();
            
        }
        
            
        
            
    

        disconnect_database($connection);
        echo($content);
	?>
</body>
</html>