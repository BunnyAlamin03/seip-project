<?php

$data = array(1, 1.3, NULL, new stdClass(), 'foo');
foreach ($data as $value){
    echo gettype($value) ."<br/>";
}
?>
