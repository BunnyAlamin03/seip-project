<?php
include_once 'lib/application.php';
$data = find($_GET['id']);
//debug($data);
?>

<html>
    <head>
        <title><?php echo PAGE_TITLE?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p> <?php
            echo "<pre>";
            print_r($data);
            echo "</pre>";
            ?>
               <a href="info.php"> Click Here </a>to full list
        </p>
    </body>
</html>
    