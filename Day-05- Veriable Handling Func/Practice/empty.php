<?php 
$var=0;
if (empty($var)){
    echo '$var is either 0, empty or not set at all<br/>';
}
if (isset($var)){
    echo '$var is set even though it is empty';
}
?>