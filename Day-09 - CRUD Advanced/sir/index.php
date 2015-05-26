<?php
include_once('lib/application.php');
$myemails = $_SESSION['myemails'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo PAGE_TITLE;?></title>
    </head>
    <body>
        <p>
        <a href="create.html">Click here</a> to add new email.
        <div>
            <?php 
        
        if(array_key_exists('message', $_SESSION) && !empty($_SESSION['message'])){
            echo $_SESSION['message']; 
        }
        ?>
        </div>
        </p>
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php 
            $counter=1;
            foreach($myemails as $email){ 

            ?>
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $email;?></td>
                <td>
                    <a href="show.php">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
