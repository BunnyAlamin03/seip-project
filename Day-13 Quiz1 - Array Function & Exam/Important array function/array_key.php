<?php
$array = array(0 => 100, "color" => "red");

echo "<pre>";
print_r(array_keys($array));
echo "</pre>";

$array2['first_name'] = 'Sumon';
$array2['last_name'] = "Mahmud";
$array2['9']= "Sumon Mahmud";

echo "<pre>";
print_r(array_keys($array2));
echo "</pre>";