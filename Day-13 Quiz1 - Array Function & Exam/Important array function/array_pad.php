<?php
$array = array(12, 10, 9);
echo "<pre>";
print_r($array);
echo "</pre>";

$result = array_pad($array, -7, -1);
echo "<pre>";
print_r($result);
echo "</pre>";
