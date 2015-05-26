<?php
$var= '';
// This will evaluate to TRUE so the text will be printed.

if(isset($var)){
    echo "This variable is set so i will print<br/>";
}

$a ="test";
$b = "another test";
var_dump(isset($a));//True;
echo '<br/>';
var_dump(isset($a, $b)); //True
echo ' <h1>unset here </h1><br/>';

unset($a);

var_dump(isset($a)); //false
echo '<br/>';
var_dump(isset($a, $b)); //false

$foo = null;
echo '<br/>';
var_dump(isset($foo)); //false


?>