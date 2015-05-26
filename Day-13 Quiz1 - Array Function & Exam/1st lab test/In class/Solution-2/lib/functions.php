<?php
function store($data = null) {
    if (is_null($data)) {
        return;
    }

    if (!array_key_exists('forminfo', $_SESSION)) {
        $_SESSION['forminfo'] = array();
    }

    if (array_key_exists('forminfo', $data) && !empty($data['forminfo'])) {
        $_SESSION['forminfo'][] = $data;
        header('location:blocked.php');
    } else {
        header('location:index.php');
    }
}
