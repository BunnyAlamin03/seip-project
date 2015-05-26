<?php
include_once 'library/applications.php';
if (array_key_exists('id', $_GET)) {
    $data = findone($_GET['id']);
}
?>
<html>
    <head>
        <title>Index of CRUD</title>
    </head>
    <BODY>
        <a href="index.php"> Back To List <br/></a><br/>
        <a href="form.html"> Add new info <br/></a><br/>
        <form action="edited.php" method="POST"> 
            <input type="hidden" name="id" value="<?php echo $_GET ['id'];?>">
            <table border="0">
                <tr>
                    <!--<th>ID</th>-->
                    <th>First Name</th>
                    <th>Last Name</th>
                </tr>
                <tr>
<!--                    <td>
                        <input type="text" value="<?php echo $_GET['id'] + 1 ?>"> 
                    </td>-->
                    <?php if (isset($data)) { ?>
                    <td> <input type="text" name="first_name" id="fname" value="<?php
                    if (array_key_exists('first_name', $data) && !empty($data['first_name'])) {
                        echo $data['first_name'];
                    } else {
                        echo "Not provide";
                    }
                    ?>"
                    >
                    </td>
                    <td> <input type="text" name="last_name" id="lname" value="<?php
                    if (array_key_exists('last_name', $data) && !empty($data['last_name'])) {
                        echo $data['last_name'];
                    } else {
                        echo "Not provide";
                    }
                    ?>"
                    >
                    </td>
                    <?php
                    } else {
                        header('location:index.php');
                    }
                    ?>
                </tr>
                <tr>
                    <td colspan="3" align="center">

                        <input type="submit" value="Updata">

                    </td>
                </tr>
            </table>
        </form>
    </BODY>
</html>