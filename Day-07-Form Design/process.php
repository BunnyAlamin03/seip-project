<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h1>We Successfully received your Data</h1><br/>";
        echo "<pre>";
        print_r($_REQUEST);
        echo "<pre>";
        echo "<br/> <h1>This is other part</h1>";
        echo "<h1>This is a validation Check</h1>";
        if(array_key_exists('last_name', $_GET) && !empty($_GET['last_name'])){
            echo "<h3>Your Last Name is : ".$_GET['last_name']."</h3>";
        }
        else {
            echo "<h3>Please enter your Last Name</h3> ";
        }
        if(array_key_exists('first_name', $_GET) && !empty($_GET['first_name'])){
            echo "<h3>Your First Name is :  ".$_GET['first_name']."</h3>";
        }
                if(array_key_exists('middle_name', $_GET['middle_name']) && !empty($_GET['middle_name'])){
                    echo $_GET['middle_name'];
                }
        ?>

    </body>
</html>
