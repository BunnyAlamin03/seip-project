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
        <title>Crud Day 12</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <section>
            <fieldset>
                <?php echo $data['email']?>
                <legend>Personal Information</legend>
                <form action="edited.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $_GET ['id'];?>">
                    <label>
                        Email Address 
                        <input type="email" name="email" id="email" value="<?php echo $data ['email'];?>"> 
                        <input type="submit" id="submit">
                    </label>
                </form>
            </fieldset>
        </section>
    </body>
</html>