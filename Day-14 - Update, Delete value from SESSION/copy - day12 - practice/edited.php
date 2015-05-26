<?php
include_once 'lib/application.php';
$data = '';
if (array_key_exists('id', $_GET)) {
    $data = find($_GET['id']);
}
if(array_key_exists('formdata', $_SESSION) && !empty($_SESSION['formdata'])){
    $_SESSION['formdata'][$_POST['id']['email']]= $_POST;
//    debug($_POST);
header('location:info.php');
}
