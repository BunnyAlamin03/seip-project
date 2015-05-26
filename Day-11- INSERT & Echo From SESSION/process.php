<?php

include_once './lib/applications.php';
// Session, Array & Message for last name
if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
if (!array_key_exists('allinfo', $_SESSION)) {
    $_SESSION['allinfo'] = array();
}
    $_SESSION['allinfo'][] = $_POST;
    $msg = "New Information Has Been Added";
    $_SESSION['message'] = $msg; // Session for message 
    header('location: info.php'); // redirecto to index page 

}
else{
    header('location:form.html');
}