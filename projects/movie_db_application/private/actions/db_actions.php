<?php
include_once('../model/db_functions.php');

$connection = connect_database(); // Setup database connection

switch($_GET['action']) {
    case 'add_customer' :
        insert_user($connection, $_GET['name'], $_GET['uname'], $_GET['pword'], $_GET['address']);
        page_redirect('users_add');
        break;
    case 'add_movie' :
        insert_movie($connection, $_GET['title'], $_GET['genre_id'], $_GET['type_id']);
        page_redirect('movies_add');
        break;
    case 'remove_user' :
        remove_user($connection, $_GET['name']);
        page_redirect('users_remove');
        break;
    case 'remove_movie' :
        remove_movie($connection, $_GET['title']);
        page_redirect('movies_remove');
        break;
        
}

function page_redirect($view, $action = '') {
    header("Location: ../index.php?view=$view");
    return true; // Make message appear dependant on action
}

?>