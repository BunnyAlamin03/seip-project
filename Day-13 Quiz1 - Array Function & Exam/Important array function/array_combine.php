<?php
$a = array('green', 'red', 'yellow');
$b = array('10', '20', '30');
$c= array_combine($a, $b);
// HERE $a is index and $b is value of new array c
echo "<pre>";
print_r($c);
echo "</pre>";