<?php
session_start();
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
    if (array_key_exists('fullname', $_SESSION)) {
        $_SESSION['forminfo'][] = array();
        $msg = " Welcome, ";
        $_SESSION['message'] = $msg;
    }
    $_SESSION['forminfo'] = $_POST;
    $data = $_SESSION['forminfo'];
    foreach($data as $value){
        if(($value['email']="s@s.c") && ($value['pw']==1)){
             header('location: blocked.php');
        }
    }
   
}
else {
    header('location: form.php');
}
?>

