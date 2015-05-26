<?php

include_once('lib/application.php');
if(array_key_exists('myemails', $_SESSION)){
    unset( $_SESSION['myemails'][$_GET['id']] );
}
header('location:index.php');

