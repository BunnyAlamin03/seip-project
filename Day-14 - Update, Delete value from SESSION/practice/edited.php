<?php
include_once 'lib/applications.php';
$data = '';
if (array_key_exists('id', $_GET)) {
    $data = find($_GET['id']);
}
if(array_key_exists('formdata', $_SESSION) && !empty($_SESSION['formdata'])){
    $_SESSION['formdata'][$_POST['id']['last_name']]= $_POST;
    $_SESSION['formdata'][$_POST['id']['first_name']]= $_POST;
    $_SESSION['formdata'][$_POST['id']['middle_name']]= $_POST;
    $_SESSION['formdata'][$_POST['id']['date_of_birth']]= $_POST;
    $_SESSION['formdata'][$_POST['id']['gender']]= $_POST;
    $_SESSION['formdata'][$_POST['id']['social_security_number']]= $_POST;
    $_SESSION['formdata'][$_POST['id']['facility_name']]= $_POST;
    debug($_POST);
header('location:index.php');
}
