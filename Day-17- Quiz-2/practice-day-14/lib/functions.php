<?php

//Function Defination
function debug($data) {
    echo "<pre>";
//    echo $data;
    print_r($data);
    echo "</pre>";
}

//All info finding for index page
function findall() {
    if (array_key_exists('formdata', $_SESSION)) {
        return $_SESSION['formdata'];
    }
    return '';
}

// Signle id finding for show page 

function findone($id = NULL) {
    if (is_null($id)) {
        return '';
    }
    return ($_SESSION['formdata'][$id]);
}
