<?php
include_once('lib/application.php');
$data = find($_GET['id']);

?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Understanding CRUD using Session</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section>
            <a href="index.php">Go </a> to view all emails.
            <form action="store.php?id=<?php echo $_GET['id'];?>" method="post">
                <input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
                <fieldset>
                    <legend>Personal Information</legend>
                    <ul>
                        <li>
                            <label for="email">Enter Email</label>
                            <input type="email" name="email" id="email" value="<?php echo $data ?>" />
                            
                            <input type="Submit" value="Save My Email" />
                    </ul>
                </fieldset>    
            </form>
        </section>
    </body>
</html>

