<?php
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "Yellow", "shape"=> "trapezoid", 4);
$result = array_merge($array1, $array2);
echo "<pre>";
print_r($result);
echo "</pre>";
?>
