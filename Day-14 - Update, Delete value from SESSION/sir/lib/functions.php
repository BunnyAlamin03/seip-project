<?php

//function definition
function debug($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function findAll(){
    if(array_key_exists('myemails', $_SESSION)){
        return $_SESSION['myemails'];
    }
    return '';
}

function find($id = null){
    if(is_null($id)){
        return '';
    } 
    return $_SESSION['myemails'][$id];
}

function store($data = null){
    
    if(is_null($data)){
        return ;
    }  
    
    if(!array_key_exists('myemails', $_SESSION)){
        $_SESSION['myemails'] = array();
    }

    if(array_key_exists('email', $data) && !empty($data['email'])){   
        $_SESSION['myemails'][] =  $data['email'];
        $msg = "A new email has been stored into sesson.";
        $_SESSION['message'] = $msg;
        header('location:index.php');
    }else{
        $msg = 'No email found, please try again.';
        $_SESSION['message'] = $msg;
        header('location:create.html');
    }
}

