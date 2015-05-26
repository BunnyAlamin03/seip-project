<?php

session_start();


   if(!array_key_exists('Decedent_Form',$_SESSION))
        {
        $_SESSION['Decedent_Form'] = array();
        }   
        
        $_SESSION['Decedent_Form'] [] = $_POST;
        header('location:index.php');
 