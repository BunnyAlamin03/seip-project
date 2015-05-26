<?php
include_once 'library/applications.php';
$data = findone($_GET['id']);
?>

<html>
    <head>
        <title>Index of CRUD</title>
    </head>
    <BODY>
        <a href="index.php"> Back To List <br/></a><br/>
        <a href="form.html"> Add new info <br/></a><br/>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
            </tr>
            <tr>
                <td> <?php echo $_GET['id']+1 ?></td>
                <td><?php echo $data['first_name']; ?></td>
                <td><?php echo $data['last_name']; ?></td>
            </tr>
        </table>
    </BODY>
</html>