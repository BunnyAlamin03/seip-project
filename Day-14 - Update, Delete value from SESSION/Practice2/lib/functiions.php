<?php
//Debug function
function debug($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
function find($id = null) {
    if (is_null($id)) {
        return '';
    }
    else{
    return $_SESSION['formdata'][$id];
    }
}

?>

