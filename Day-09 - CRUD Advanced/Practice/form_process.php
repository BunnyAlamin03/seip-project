<?php
session_start();
function debug($data) {
    echo "<pre>";
    print_r($data);
    echo "<pre>";
}
//$_SESSION['myemails']= array();
if(!array_key_exists('myemails', $_SESSION)){
    $_SESSION['myemails'] = array();   
}

if (array_key_exists('email', $_POST) && !empty($_POST['email'])) {
        echo "Your Last provided email is : " . $_POST['email'];
        $_SESSION['myemails'][]= $_POST['email'];    
        $_SESSION[] = $_POST['email'];  
    }
    else{
        echo "Not Available";
    }
    debug($_SESSION);
     $count = count($_SESSION);
     echo "<pre>";
     echo "Number of Session is : " . $count;
     echo "</pre>";
     $counts = count($_SESSION['myemails']);
     echo "<pre>";
     echo "Number of Email is : " . $counts;
     echo "</pre>";
?>


