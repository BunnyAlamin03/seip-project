<?php
session_start();

function debug($data){
    echo "<pre>";
    print_r($data);
    echo "<pre>";
}
//Array for Eamil
if(array_key_exists('email', $_POST) && !empty($_POST['email'])){
    echo "Your Update Email is : ". $_POST['email'];
}
if(!array_key_exists('myemails', $_SESSION)){
    $_SESSION['myemails']=array();
}

$_SESSION['myemails'][] = $_POST['email'];   
$count = count($_SESSION);
echo "Number of Session is : ". $count;
echo "\n";

//Array for First Name
if(!array_key_exists('myname', $_SESSION)){
    $_SESSION['myname']=array();
}  

$_SESSION['myname'][] = $_POST['fname'];     
debug($_SESSION);
$count_email = count($_SESSION['myemails']);
echo "Number of Emails is : ". $count_email;
?>
