<?php
include_once 'lib/applications.php';
if (strtoupper($_SERVER['REQUEST_METHOD']) == 'GET') {
    if (array_key_exists('id', $_GET)) {
        $data = findone($_GET['id']);
}
}
?>

<html>
    <head>
        <title>
            Show by CRUD
        </title>
    </head>
    <body>
        <div align="center">
            <a href="index.php"><input type="button" value="Back"></a>
            <a href="form.php"><input type="button" value="Add new"></a><br/><br>
        </div>
        <table border="1" align="center" width="600" bgcolor="white">.
            <tr  bgcolor="whitesmoke">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Emal </th>
                <th>Password</th>
            </tr>
            <tr>
                <td>
                    <?php echo $_GET['id'] + 1; ?>
                </td>
                <td>
                    <?php
                    if (array_key_exists('first_name', $data) && !empty($data['first_name'])) {
                        echo $data['first_name'];
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if (array_key_exists('last_name', $data) && !empty($data['last_name'])) {
                        echo $data['first_name'];
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if (array_key_exists('email', $data) && !empty($data['email'])) {
                        echo $data['email'];
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if (array_key_exists('pw', $data) && !empty($data['pw'])) {
                        echo $data['pw'];
                    }
                    ?>
                </td>
            </tr>
        </table>
    </body>
</html>
