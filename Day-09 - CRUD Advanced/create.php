<?php
session_start();
//Function defination 
function debug($data){
    echo "<pre>";
    print_r(data);
    echo "</pre>";
}

if(!array_key_exists('myemails', $_SESSION)){
    $_SESSION['myemails'] = array();
}
$count = count($_SESSION);
        echo $count;
if(array_key_exists('email', $_POST) && !empty($_POST['email'])){
    $_SESSION['myemails'][] = $_POST['email'];
}
else{
    echo "Not Available";
}


//Function Call
debug($_SESSION);