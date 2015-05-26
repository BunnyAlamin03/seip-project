<?php

$name = 'BITM';
$_name = (unset) $name; 
unset($name);
var_dump($_name);echo "<br>";
//var_dump((unset) $name);
var_dump($name);