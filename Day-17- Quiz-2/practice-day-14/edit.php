<?php
include_once 'lib/applications.php';
    if (array_key_exists('id', $_GET)) {
        $data = findone($_GET['id']);
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
            <form action="edited.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                <table border="0" align="center" width="600" bgcolor="white">.
                    <tr  bgcolor="whitesmoke">
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Emal </th>
                        <th>Password</th>
                    </tr>
                    <?php if (isset($data) && !empty($data)) { ?>
                        <tr>
                            <td>
                                <?php echo $_GET['id']; ?>
                            </td>
                            <td>
                                <input type="text" name="first_name" id="first_name" value="<?php
                                if (array_key_exists('first_name', $data) && !empty($data['first_name'])) {
                                    echo $data['first_name'];
                                } else {
                                    echo "Not Provide";
                                }
                                ?>">

                            </td>
                            <td>
                                <input type="text" name="last_name" id="last_name" value="<?php
                        if (array_key_exists('last_name', $data) && !empty($data['last_name'])) {
                            echo $data['last_name'];
                        } else {
                            echo "Not Provide";
                        }
                                ?>">
                            </td>
                            <td>
                                <input type="text" name="email" id="email" value="<?php
                        if (array_key_exists('email', $data) && !empty($data['email'])) {
                            echo $data['email'];
                        } else {
                            echo "Not Provide";
                        }
                                ?>">

                            </td>
                            <td>
                                <input type="text" name="pw" value="<?php
                               if (array_key_exists('pw', $data) && !empty($data['pw'])) {
                                   echo $data['pw'];
                               } else {
                                   echo "Not Provide";
                               }
                                ?>">

                            </td>                      
                        </tr>  
                        <tr>
                            <td colspan="5" align="center">
                                <br/> 
                                <input type="submit" value="Update all info "><br/>
                            </td><br/>
                        </tr>
                    </table>
                </form>
            </body>
        </html>
        <?php
    }
else {
    header('location:index.php');
}
?>