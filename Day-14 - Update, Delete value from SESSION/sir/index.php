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
        <p>|Search| Download as PDF | XL</p>
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
           
            
            foreach($data as $key=>$value){ 

            ?>
            <tr>
                <td><?php echo $key+1; ?></td>
                <td><?php echo $value;?></td>
                <td>
                    <a href="show.php?id=<?php echo $key;?>">View</a>
                    <a href="edit.php?id=<?php echo $key;?>">Edit</a>
                    <a href="delete.php?id=<?php echo $key;?>">Delete</a>
                
                </td>
            </tr>
            <?php 
            
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
        |Paging|
    </body>
</html>
