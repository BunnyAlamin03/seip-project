<?php
if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST'){   
        echo "<h1>";
        echo "This is blocked page and protected by PHP Program";
        echo "</h1>";
    }
else{
    header('location:index.php');
}
?>