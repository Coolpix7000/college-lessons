<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Movies database</title>
	<link rel="stylesheet" type="text/css" href="../css/global.css">
	<?php include_once('../../global_functions.php'); ?>
    <?php include_once('model/db_functions.php'); ?>
    <?php include_once('model/view_functions.php'); ?>
    
</head>
<body>
	<?php 
        $connection = connect_database();
        $content = '<h1>Movie database</h1>';
            
        if($_GET['view'] == '') {
            $content .= '<h2>Home</h2>';
            $content .= '<a class="button" href="index.php?view=users">Manage users</a>
                         <a class="button" href="index.php?view=movies">Manage movies</a>';
            
        } else if($_GET['view'] == 'users') {
            $content .= '<h2>Users</h2>';
            $users = get_users($connection);
            var_dump($users);
            $content .= '<a class="button" href="index.php?view=users_add">Add user</a>
                         <a class="button" href="index.php?view=users_remove">Remove user</a>';
            home_button();
            
        } else if($_GET['view'] == 'movies') {
            $content .= '<h2>Movies</h2>';
            $content .= '<a class="button" href="index.php?view=movies_add">Add movie</a>
                         <a class="button" href="index.php?view=movies_remove">Remove movie</a>';
            home_button();
            
        } else if($_GET['view'] == 'users_add') {
            $content .= '<h2>Add users</h2>';
            $content .= '<form id="add_user" method="get" action="actions/db_actions.php">
                            <input type="hidden" id="action" name="action" value="c_add_customer">
                            Name:  <input type="text" id="name" name="name"><br>
                            Address:  <input type="text" id="address" name="address"><br>
                            <input type="submit" value="Add user">
                         </form>';
            home_button();
            
        } else if($_GET['view'] == 'users_remove') {
            $content .= '<h2>Remove users</h2>';
            
            home_button();
            
        } else if($_GET['view'] == 'movies_add') {
            $content .= '<h2>Add movies</h2>';
            
            home_button();
            
        } else if($_GET['view'] == 'movies_remove') {
            $content .= '<h2>Remove movies</h2>';
            
            home_button();
            
        }
        
            
        
            
    

        disconnect_database($connection);
        echo($content);
	?>
</body>
</html>