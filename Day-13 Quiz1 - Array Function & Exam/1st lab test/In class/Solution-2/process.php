<?php
include_once 'lib/application.php';
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    if (!array_key_exists('forminfo', $_SESSION)) {
        $_SESSION['forminfo'] = array();
    }
        $_SESSION['forminfo'][] = $_POST;
        header('location:blocked.php');
        $msg ="WELCOME";
        $_SESSION['message']=$msg;
}
else {
    header('location:form.html');
}
