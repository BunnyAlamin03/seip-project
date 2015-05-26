<?php
include_once 'library/applications.php';
$data = '';
if (array_key_exists('formdata', $_SESSION) && !empty($_SESSION['formdata'])) {
    $data = $_SESSION['formdata'];
}
?>
<html>
    <head>
        <title>Index of CRUD</title>
    </head>
    <BODY>
        <a href="form.html"> Add new info <br/></a><br/>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th colspan="3">Action </th>
            </tr>
            <?php
            if (isset($data) && !empty($data)) {
                foreach ($data as $key => $value) {
                    ?>
                    <tr>
                        <td> <?php echo $key+1 ?></td>
                        <td><?php echo $value['first_name']; ?></td>
                        <td><?php echo $value['last_name']; ?></td>
                        <td><a href="show.php?id=<?php echo $key; ?>">Show</a></td>
                        <td><a href="edit.php?id=<?php echo $key; ?>">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $key; ?>">Delete</a></td>
                    </tr>
                <?php }
            }
            ?>
        </table>
    </BODY>
</html>