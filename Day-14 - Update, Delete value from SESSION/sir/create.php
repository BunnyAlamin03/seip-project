<?php
include_once('lib/application.php');

if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    store($_POST);
}else{
    header('location:create.html');
}
?>
  