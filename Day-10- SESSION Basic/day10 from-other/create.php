<?php
include_once('lib/application.php');

if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    //var_dump($_POST);
    if(!array_key_exists('lastname', $_SESSION)){
        $_SESSION['lastname'] = array();
    }

    if(array_key_exists('lname', $_POST) && !empty($_POST['lname'])){   
        $_SESSION['lastname'][] =  $_POST['lname'];
        $msg = "A new name has been stored into sesson.";
        $_SESSION['message'] = $msg;
        header('location:index.php');
    }else{
        $msg = 'No name found, please try again.';
        $_SESSION['message'] = $msg;
    }
}else{
    header('location:create.html');
}


if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    //var_dump($_POST);
    if(!array_key_exists('middlename', $_SESSION)){
        $_SESSION['middlename'] = array();
    }

    if(array_key_exists('mname', $_POST) && !empty($_POST['mname'])){   
        $_SESSION['middlename'][] =  $_POST['mname'];
        $msg = "A new name has been stored into sesson.";
        $_SESSION['message'] = $msg;
        header('location:index.php');
    }else{
        $msg = 'No name found, please try again.';
        $_SESSION['message'] = $msg;
    }
}else{
    header('location:create.html');
}

?>
<html>
    <head>
        <title><?php echo PAGE_TITLE;?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php echo $msg; ?>
        <a href="index.php">Click here</a> to view all names.
    </body>
</html>