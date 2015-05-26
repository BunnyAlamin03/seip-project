<?php
include_once 'lib/applications.php';
if (array_key_exists('formdata', $_SESSION)){
   unset( $_SESSION['formdata'][$_GET['id']]);
}
header('location:index.php');