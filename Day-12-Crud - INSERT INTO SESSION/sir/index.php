<?php
include_once('lib/application.php');
    $data = findAll();
    
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
            if(isset($data) && !empty($data)){
           
            $counter=1;
            foreach($data as $item){ 

            ?>
            <tr>
                <td><?php echo $counter; ?></td>
                <td><?php echo $item;?></td>
                <td>
                    <a href="show.php?id=<?php echo $counter-1;?>">View</a>
                    <a href="edit.php">Edit</a>
                    <a href="delete.php">Delete</a>
                
                </td>
            </tr>
            <?php 
            $counter++;
            } 
                 
            }else{
                ?>
            <tr>
                <td colspan="3">
                    <p>
                    No data available.<a href="create.html">Click here</a> to add new email.
                    </p>
                </td>
            </tr>
            <?php
            }
            
            ?>
        </table>
    </body>
</html>
