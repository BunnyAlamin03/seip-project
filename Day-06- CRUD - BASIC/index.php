<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>This is PHP Code</title>
    </head>
    <body>
        <?php
        echo '<h1> Your value has submitted</h1><br/>';
        ?>
       <?php
//        echo "<pre>";
//        echo var_dump($_REQUEST);
//      ?>
      <?php
//        echo "<p>";
//        print_r($_GET['email']); //print from array
//        echo "<br/>";
//        echo "You have submitted " . "<big><b>" . $_GET['email'] . " </big></b>this email address";
//        echo " \n And Your phone number is " . $_GET['phone'] . "";
        if (array_key_exists('email', $_GET) && !empty($_GET['email'])) {
            echo " \n\n\nYou have submitted " . "<b>" . $_GET['email']. " And ". $_GET['phone'];
        } else {
            echo "\n\n\n<h1>Please enter your value correctly";
        }
//
//        if (!empty($_GET['email']))
//            echo "\n\nYour inputed email address is (" . $_GET['email'] . ")";
//        else {
//            echo "Please enter value";
//        }
//        
        ?>
    <?php

        function debug($aVariabl) {
            if (is_array($aVariable)) {
                echo "<pre>";
                print_r($aVariabl);
            } else {
                echo "<pre>";
                var_dump($aVariabl);
            }
        }
        debug($_GET);
    ?>
        
    </body>
</html>
