<?php

// This is debug function 
function debug($data) {
    echo "<pre>";
//    echo $data;  we can use anyone as the necessary 
    print_r ($data);
    echo "</pre>";
}

// Creating sessin, data store into session 
function store($data = null) {
    
    if (is_null(data)) {
        return;
    }
    
    if (!array_key_exists('formdata', $_SESSION)) {
        $_SESSION['formdata'] = array();
        $msg = "New information has been added";
        $_SESSION['message'] = $msg;
    }
        $_SESSION['formdata'][] = $data;
        header('location:info.php');
}

//Showing all data as list in table(return to info.php)
function findall() {
    if (array_key_exists('formdata', $_SESSION) && !empty($_SESSION['formdata'])) {
        return $_SESSION['formdata'];
    } else {
        return '';
    }
}

// Find single value
function find($id = null) {
    if (is_null($id)) {
        return '';
    }
    return $_SESSION['formdata'][$id];
}