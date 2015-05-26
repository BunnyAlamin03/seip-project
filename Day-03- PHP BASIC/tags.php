<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>This is my first php code</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <div class="full-body">
            <h1>Day 3</h1>
                <?php
                         echo "Hello world ";
                             //more code
                         echo "Last statement";
                            //the script ends here will no PHP clossing tag
                 ?>
            <br> <h1>Instruction Separation</h1><br>
            <?php 
                    echo 'This is a test'; 
            ?>
            <br>
            <?php  echo 'This is a test ' ?>
            <br>
            <?php echo 'we mitted the last clossing tag' ?>
            <h1>
                <?php 
                    echo "Test h1";
                ?>
                
            </h1>
            <br> <p>Comments<br></p>
            <?php 
                echo 'this is a test <br>'; //This is a one-line C++ Style  oomment 
                /* This is a multi line comment 
                 * yet another line of comment */
                 echo 'This is yet another test <br>';
                 echo 'One Final Test'; #This is a one-line shell-style comment 
            ?>
        </div>
        
    </body>
</html>
