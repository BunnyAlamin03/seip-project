<?php
include_once('lib/application.php');
$data = find($_GET['id']);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo PAGE_TITLE;?></title>
    </head>
    <body>
        <p>
            Your email is <?php echo $data;?>
            <a href="index.php">Click here</a> to see list.
        </p>
    </body>
</html>