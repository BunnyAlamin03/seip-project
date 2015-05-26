<?php
include_once 'lib/application.php';
$data = '';
if (array_key_exists('id', $_GET)) {
    $data = find($_GET['id']);
}
//debug($data);
?>

<html>
    <head>
        <title><?php echo PAGE_TITLE ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p> <?php
            if(isset($data) && !empty($data)){
                echo $data['email'];
            }
            ?>
            <a href="info.php"> Click Here </a>to full list
        </p>
    </body>
</html>
