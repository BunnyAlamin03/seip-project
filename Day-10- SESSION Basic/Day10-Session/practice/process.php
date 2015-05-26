<?php
include_once'./lib/applications.php';

//if(!array_key_exists('lastname', $_SESSION)){
//        $_SESSION['lastname'] = array();
//    }

if(array_key_exists('lastname', $_POST) && !empty($_POST['lastname'])){
    $_SESSION['mylstnames'][]= $_POST['lastname'];
    $msg = "New information has added";
    $_SESSION['message']= $msg;
    header('location: info.php');
}
else{
    $msg = "Please enter full info : ";
    $_SESSION['message']= $msg;
    header('location: info.php');
}


//for the first name 
$_SESSION['firstname']=array();
if(!array_key_exists('firstname', $_SESSION)){
        $_SESSION['firstname'] = array();
    }
if(array_key_exists('firstname', $_POST) && !empty($_POST['firstname'])){
    $_SESSION['myfstnames'][]= $_POST['firstname'];
    header('location: info.php');
}
else{
    $msg = "Please enter full info : ";
    $_SESSION['message']= $msg;
    header('location: info.php');
}




//for the Middle name 
$_SESSION['middlename']=array();
if(!array_key_exists('middlename', $_SESSION)){
        $_SESSION['middlename'] = array();
    }
if(array_key_exists('middlename', $_POST) && !empty($_POST['middlename'])){
    $_SESSION['mymidnames'][]= $_POST['middlename'];
    header('location: info.php');
}
else{
    $msg = "Please enter full info : ";
    $_SESSION['message']= $msg;
    header('location: info.php');
}
//debug($_SESSION);
?>
<html>
    <head>
        <title>
            <?php echo PAGE_TITLE; ?>
        </title>
    </head>
</html>