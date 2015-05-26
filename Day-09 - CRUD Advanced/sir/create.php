<?php
include_once('lib/application.php');

if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){
    //var_dump($_POST);
    if(!array_key_exists('myemails', $_SESSION)){
        $_SESSION['myemails'] = array();
    }

    if(array_key_exists('email', $_POST) && !empty($_POST['email'])){   
        $_SESSION['myemails'][] =  $_POST['email'];
        $msg = "A new email has been stored into sesson.";
        $_SESSION['message'] = $msg;
        header('location:index.php');
    }else{
        $msg = 'No email found, please try again.';
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
        <a href="index.php">Click here</a> to view all emails.
    </body>
</html>
  