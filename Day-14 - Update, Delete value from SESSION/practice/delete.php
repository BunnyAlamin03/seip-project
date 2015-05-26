<?php
include_once 'lib/applications.php';
if (array_key_exists('id', $_GET)) {
    $data = find($_GET['id']);
}
//debug($data);
//echo $data['id'];
if(array_key_exists('formdata', $_SESSION)){
    unset($_SESSION['formdata'][$_GET['id']]);
    $msg = "One information has been deleted";
    $_SESSION['delete_message']= $msg;
    echo "One info has deleted";
}
header('location:index.php');
?>