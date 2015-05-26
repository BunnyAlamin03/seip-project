<?php
include_once 'lib/applications.php';
if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){ //working if post method  
    if(!array_key_exists('formdata', $_SESSION)){
        $_SESSION['formdata']= array(); // creating an array
    }
    $_SESSION['formdata'][]= $_POST; //  Value post > formdata
    $msg= "New information has added";
    $_SESSION['message']=$msg;
    header('location: index.php');
   
//    debug($_SESSION['formdata']);
}
else{
    header('location: form.html');
}
?>