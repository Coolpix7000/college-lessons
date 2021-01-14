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
        $content = nav_bar('users');
        $content .= '
                    <div class="grid-container">
                        <form id="search_users" method="get" action="?view=view_users">
                            Name: <input type="text" id="search" name="search" placeholder="Search name">
                            <input type="submit" value="Search">
                        </form>
                        <br>';
        $users = get_users($connection, $_GET['search']);
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
        $content .= '</div>'; // Close grid container

        echo($content);
    ?>