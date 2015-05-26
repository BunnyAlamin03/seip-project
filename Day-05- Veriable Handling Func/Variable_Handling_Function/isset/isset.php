<?php

$var =' ';

//this will evaluate to TRUE so the text will be printed.
if (isset($var)){
    echo "This var is set so i will print. <br/>";
}
// In the next examples we'll use var_Dump to output
// the return value of isset().
$a = "test";
$b ="anothertest";

var_dump(isset($a)); //True
var_dump(isset($a, $b)); //True

unset ($a);
var_dump(isset($a)); //False
var_dump(isset($a, $b)); //False

$foo = NULL;
var_dump((isset($foo)));  //false

?>