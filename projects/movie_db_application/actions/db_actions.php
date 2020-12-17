<?php
include_once('../model/db_functions.php');

$connection = connect_database(); // Setup database connection

switch($_GET['action']) {
    case 'add_customer' :
        insert_user($connection, $_GET['name'],$_GET['address']);
        page_redirect('view_users');
        break;
    case 'login' :
        //BROKEN - FIX IT
        $redirect = check_login($connection, $_GET['name'],$_GET['pass']);
        if($redirect == 'failed' && 1 == 0) {
            page_redirect('failed_login');
        } else if(!$redirect && 1 == 0) {
            page_redirect('');
        } else {
            page_redirect('home');
        }
        break;
        
        
}

function page_redirect($view, $action = '') {
    header("Location: ../index.php?view=$view");
    return true; //Make message appear dependant on action
}

?>