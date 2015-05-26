<?php
include_once 'lib/applications.php';
$data = '';
if (array_key_exists('id', $_GET)) {
    $data = find($_GET['id']);
}
if (array_key_exists('formdata', $_SESSION) && !empty($_SESSION['formdata'])) {
    $_SESSION['formdata'][$_POST['id']] = $_POST;
    header('location:index.php');
}
