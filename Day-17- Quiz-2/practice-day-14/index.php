<?php
include_once 'lib/applications.php';
$data = findall();
?>
<html>
    <head>
        <title>Understanding CRUD</title>
    </head>
    <body bgcolor="whitesmoke">
        <div align="center">
            <a href="form.php"><h2>Click Here To Add New info</h2></a>
        </div>
        <table border="1" align="center" width="800" bgcolor="white">.
            <tr  bgcolor="silver">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Emal </th>
                <th>Password</th>
                <th colspan="3">Action</th>
            </tr>
            <?php
            if (isset($data) && !empty($data)) {
                foreach ($data as $key => $value) {
                    ?>
                    <tr>
                        <td> <?php echo $key+1 ?> </td>
                        <td> 
                            <?php
                            if (array_key_exists('first_name', $value) && !empty($value['first_name'])){
                                echo $value['first_name'];
                            }
                            else {
                                echo "Not Available";
                            }
                            ?> 
                        </td>
                        <td> <?php
                            if (array_key_exists('last_name', $value)&& !empty($value['last_name'])){
                                echo $value['last_name'];
                            }
                            else {
                                echo "Not Available";
                            }
                            ?> 
                        </td>
                        <td> <?php
                            if (array_key_exists('email', $value)&& !empty($value['email'])){
                                echo $value['email'];
                            }
                            else {
                                echo "Not Available";
                            }
                            ?> 
                        </td>
                        <td> <?php
                            if (array_key_exists('pw', $value)&& !empty($value['pw'])){
                                echo $value['pw'];
                            }
                            else {
                                echo "Not Available";
                            }
                            ?> 
                        </td>
                        <td>
                            <a href="show.php?id=<?php echo $key; ?>">Show</a>

                        </td>
                        <td>
                            <a href="edit.php?id=<?php echo $key; ?>">Edit</a>

                        </td>
                        <td>
                            <a href="delete.php?id=<?php echo $key; ?>">Delete</a>
                        </td>


                    </tr>
                    <?php
                }
            } else {
                ?>

                <tr>
                    <td colspan="6" align="center">
                    <?php echo "No Available Data" ?>
                <a href="form.php"><br/>ClicK Here for add new data<br/></a>
                    </td>
            </tr>

        <?php } ?>
    </table>
</body>
</html>