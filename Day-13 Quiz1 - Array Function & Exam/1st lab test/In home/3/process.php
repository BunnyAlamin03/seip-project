<?php
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
if  (array_key_exists('v1', $_POST) && !empty($_POST['v1'])) {
    $var = $_POST['v1'];
} 
if (array_key_exists('v2', $_POST) && !empty($_POST['v2'])) {
    $var2 = $_POST['v2'];
}
$add = $var + $var2;
$sub = $var - $var2;
$mul = $var * $var2;
$div = $var / $var2;
?>
<html>

    <head>
        <title>Calculator</title></head>
    <body>
        <div align="center">
            <h2><a href="form.php">Click Here</a> to Calculate Again<br/></h2>
        </div>

        <table align="center" width="500" border="1" bordercolor="red">
            <th> First Value </th>
            <th> Second Value </th>
            <th>
                <?php
                if (array_key_exists('adds', $_POST) && !empty($_POST['adds'])) {
                    echo "Addition";
                } else if (array_key_exists('subs', $_POST) && !empty($_POST['subs'])) {
                    echo " Substruction";
                } else if (array_key_exists('muls', $_POST) && !empty($_POST['muls'])) {
                    echo " Multiplication ";
                } else if (array_key_exists('divs', $_POST) && !empty($_POST['divs'])) {
                    echo " Division";
                }
                ?>
            </th>
            <tr>
                <td> <?php echo $var ?></td>
                <td> <?php echo $var2 ?></td>
                <td>
                    <?php
                    if (array_key_exists('adds', $_POST) && !empty($_POST['adds'])) {
                        echo $add;
                    } else if (array_key_exists('subs', $_POST) && !empty($_POST['subs'])) {
                        echo $sub;
                    } else if (array_key_exists('muls', $_POST) && !empty($_POST['muls'])) {
                        echo $mul;
                    } else if (array_key_exists('divs', $_POST) && !empty($_POST['divs'])) {
                        echo $div;
                    }
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>
<?php }
else{
    header('location: form.php');
}
?>