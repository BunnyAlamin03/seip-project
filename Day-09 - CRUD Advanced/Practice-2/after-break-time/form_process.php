<?php
include_once('lib/application.php');

//debug ($_SESSION);
//Array for Eamil
if(!array_key_exists('myemails', $_SESSION)){
    $_SESSION['myemails']=array();
}
if(array_key_exists('email', $_POST) && !empty($_POST['email'])){
    $_SESSION['myemails'][] = $_POST['email']; 
//    getting ready a message for use     
    $msg= "New Email Has Been added";
}
else{
    $msg = "No email found ! Please try again ";
}

 
//$count = count($_SESSION);
//echo "<br/>";
//echo "Number of Session is : ". $count;
//echo "\n";
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
        <?php echo $msg;?>
            <a href="index.php">Click Here to View All email</a>
        </div>
    </body>
</html>
