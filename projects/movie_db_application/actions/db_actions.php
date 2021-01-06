<?php
include_once('../model/db_functions.php');

$connection = connect_database(); // Setup database connection

switch($_GET['action']) {
    case 'add_customer' :
        insert_user($connection, $_GET['name'],$_GET['address']);
        page_redirect('view_users');
        break;
    case 'login' :
        $redirect = check_login($connection, $_GET['user'], $_GET['pass']);
        if($redirect == 'success') {
            page_redirect('home');
        } else if($redirect == 'failed'){
            page_redirect('failed_login');
        }
        break;
    case 'reset_password' :
        $redirect = reset_login($connection, $_GET['user'], $_GET['pass']);
        if($redirect == 'User updated sucessfully') {
            page_redirect('home');
        } else {
            echo($redirect);
        }
        break;
        
}

function page_redirect($view, $action = '') {
    header("Location: ../index.php?view=$view");
    return true; //Make message appear dependant on action
}

?>