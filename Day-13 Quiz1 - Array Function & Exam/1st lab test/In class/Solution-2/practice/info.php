<?php
include_once 'lib/application.php';
// Function for show all data as list include from function.php
$forminfo = findall();
debug($forminfo);
?>
<html>
    <head>
        <title>Info</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div align="center">
            <h3><?php
                if (array_key_exists('message', $_SESSION)) {
                    echo $_SESSION['message'];
                }
                ?>
            </h3>
            <a href=form.html><b>Click Here</b></a> to add more<br/>
        </div>
        <table align="center" border="1" cellpadding="10">
            <tr bgcolor="gainsboro" >
                <th>SL</th>
                <th>Email</th>
                <th colspan="3">Action</th>
            </tr>

            <?php
            if (isset($forminfo) && !empty($forminfo)) {
                $counter = 1;
                foreach ($forminfo as $value) {
                    ?>
                    <tr>
                        <td><?php echo $counter; ?></td>
                        <td><?php
                            if (array_key_exists('email', $value) && !empty($value['email'])) {
                                echo $value['email'];
                            } else {
                                echo "Not provide";
                            }
                            ?>
                        </td>           
                        <td>
                            <a href="show.php?id=<?php echo $counter - 1; ?>"> Show </a>
                        </td>
                        <td>
                            <a href="update.html"> Update </a></td>
                        <td>
                            <a href="delete.html"> Delete </a>
                        </td>
                    </tr>
                    <?php
                    $counter++;
                }
            } else {
                ?>
                <tr>
                    <td colspan="4">
                        <?php echo "<h1>Not available data in the table</h1>"; ?>
                        <a href="form.html">Click Here </a> to add data
                    </td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>
