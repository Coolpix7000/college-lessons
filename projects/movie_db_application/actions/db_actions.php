<?php
include_once('../model/db_functions.php');

$connection = connect_database(); // Setup database connection

switch($_GET['action']) {
    case 'add_customer' :
        insert_user($connection, $_GET['name'],$_GET['address']);
        page_redirect('view_users');
        break;
        
        
}

function page_redirect($view, $action = '') {
    header("Location: ../index.php?view=$view");
    return true; //Make message appear dependant on action
}

?>