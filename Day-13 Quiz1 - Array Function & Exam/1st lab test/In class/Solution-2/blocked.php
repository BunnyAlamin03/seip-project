<?php
include_once 'lib/application.php';
 if (array_key_exists('forminfo', $_SESSION) && !empty($_SESSION['forminfo'])) {
        $forminformation = $_SESSION['forminfo'];
        
    } 
    echo "<pre>";
//print_r($forminformation);
echo "</pre>";
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <form>
            <?php echo " Welcome : "?>
        <?php 
        foreach($forminformation as $value){
         echo "Welcome : " . $value['fname'];
        }
        ?>
        </form>
    </body>
</html>