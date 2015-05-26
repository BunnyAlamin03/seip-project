<?php
session_start();

function debug($aVariable){
   
    if(is_array($aVariable)){
        echo "<pre>";
        print_r( $aVariable );
        echo "<pre>";
    }else{
        var_dump($aVariable);
    }   
}

//debug($_GET);

$counter = count($_SESSION);
echo $counter;
$counter = $counter + 1;

if(array_key_exists('email', $_GET) && !empty($_GET['email'])){

    echo "You have submitted "."<b>".$_GET['email']."</b>";
    $_SESSION[$counter] = $_GET['email'];

}else{
    echo "Please enter your email.";
}


//session



debug($_SESSION);




