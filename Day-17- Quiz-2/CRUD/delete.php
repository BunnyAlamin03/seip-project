<?php
include_once 'library/applications.php';
if (array_key_exists('id', $_GET)) {
    $data = findone($_GET['id']);
}
if(array_key_exists('formdata', $_SESSION)){
unset($_SESSION['formdata'][$_GET['id']]);
}
header('location:index.php');
?>