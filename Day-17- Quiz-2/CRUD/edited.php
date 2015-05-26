<?php
include_once 'library/applications.php';
if(strtoupper($_SERVER['REQUEST_METHOD'])== 'POST'){
if(array_key_exists('formdata', $_SESSION)){
    $_SESSION['formdata'][$_POST['id']]= $_POST;
    header('location:index.php');
}
}
else{
    header('location:index.php');
}
?>