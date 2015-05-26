<?php
include_once 'library/applications.php';

if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    if (!array_key_exists('formdata', $_SESSION)) {
        $_SESSION['formdata'] = array();
    }
    $_SESSION['formdata'][] = $_POST;
    debug($_SESSION);
    header('location:index.php');
}
else{
    header('location:form.html');
}
?>