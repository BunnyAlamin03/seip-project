<?php
include_once('lib/application.php');
$lastname = $_SESSION['lastname'];
$middlename = $_SESSION['middlename'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo PAGE_TITLE;?></title>
    </head>
    <body>

        <a href="create.html">Click here</a> to add new name.
        <div>
            <?php 
        
        if(array_key_exists('message', $_SESSION) && !empty($_SESSION['message'])){
            echo $_SESSION['message']; 
        }
        ?>
        </div>
        
        <table border="1">
            <tr>
                <th>Sl</th>
                <th>Last Name</th>  
                <th>Middle Name</th> 
                <th>Action</th>
            </tr>
   
            <?php 
            $counter=1;
            foreach($lastname as $lastname){ 
             }
             $counter=1;          
            foreach($middlename as $middlename){ 
                     
           ?>
            
            <tr>
                <td><?php echo $counter++; ?></td>
                <td><?php echo $lastname;?></td>
                <td><?php echo $middlename;?></td>
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
