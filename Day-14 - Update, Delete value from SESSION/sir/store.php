<?php
include_once('lib/application.php');
    if(array_key_exists('email', $_POST) && !empty($_POST['email'])){   
        
        //debug($_SESSION);
       
        $_SESSION['myemails'][$_POST['id']] =  $_POST['email'];
        $msg = "A new email has been stored into sesson.";
        $_SESSION['message'] = $msg;
        header('location:index.php');
    }else{
        $msg = 'No email found, please try again.';
        $_SESSION['message'] = $msg;
        header('location:create.html');
    }

