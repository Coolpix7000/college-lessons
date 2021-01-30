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
        session_start();
        if(!isset($_SESSION['loggedin'])) {
            header('Location: ../index.html');
            die();
        }
        $view = $_GET['view'];
        $content = title_nav_bar($view);
        $content .= '<div class="grid-container">';
        if($view == '') {
            header('Location: home.php?view=home');
        } else if($view == 'reset_password') {
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
        } else if($view == 'failed_login') {
            $content .= '<h2>Login failed</h2>
                <a class="button" href="home.php?view=">Go back</a>';
        } else if($view == 'home') {
            $content .= '<a class="button" href="users.php">View users</a><br>
                         <a class="button" href="movies.php">View movies</a>';
        } else if($view == 'view_users') {
            
        //Edit pages ->
        } else if($view == 'users_add') {
            $content .= '<h2>Add users</h2>';
            $content .= '<form id="add_user" method="get" action="actions/db_actions.php">
                            <input type="hidden" id="action" name="action" value="add_customer">
                            Name:  <input type="text" id="name" name="name"><br>
                            Username:  <input type="text" id="uname" name="uname"><br>
                            Password:  <input type="text" id="pword" name="pword"><br>
                            Address:  <input type="text" id="address" name="address"><br>
                            <input type="submit" value="Add user" class="button">
                         </form>';
            $content .= home_button();
            
        } else if($view == 'users_remove') {
            $content .= '<h2>Remove users</h2>';
            $content .= '<form id="remove_user" method="get" action="actions/db_actions.php">
                            <input type="hidden" id="action" name="action" value="remove_user">
                            Name:  <input type="text" id="name" name="name"><br>
                            <input type="submit" value="Remove user" class="button">
                         </form>';
            $content .= home_button();
            
        } else if($view == 'movies_add') {
            $content .= '<h2>Add movies</h2>';
            $content .= '<form id="add_movie" method="get" action="actions/db_actions.php">
                            <input type="hidden" id="action" name="action" value="add_movie">
                            Title:  <input type="text" id="title" name="title"><br>
                            Genre:  <input type="text" id="genre_id" name="genre_id"><br>
                            Type:  <input type="text" id="type_id" name="type_id"><br>
                            <input type="submit" value="Add movie" class="button">
                         </form>';
            $content .= home_button();
            
        } else if($view == 'movies_remove') {
            $content .= '<h2>Remove movies</h2>';
            
            $content .= home_button();
            
        }
        $content .= '</div>'; // Close grid container

        echo($content);
	?>
</body>
</html>