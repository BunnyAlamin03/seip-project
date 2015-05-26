<?php
include_once 'lib/applications.php';
$data='';
if(strtoupper($_SERVER['REQUEST_METHOD']) == 'GET'){ // anyone can't access directly this page
if(array_key_exists('id', $_GET)){
$data = find($_GET['id']);
}
else{
    header('location: index.php');
}
//debug($data);
?>
<html>
    <head>
        <TITLE><?php echo PAGE_TITLE; ?></TITLE>
    </head>
    <body bgcolor="whitesmoke">
        <input type="hidden" name="id" value="<?php echo $_GET ['id'];?>">
        <div align="center">
            <a href="index.php">
                <input type="button" value="Back To List View">
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="form.html">
                <input type="button" width="400px" value=" Add new data  ">
            </a>
        </div><br/><br/>
        <table border="1" cellpadding="15" align="center">
            <tr bgcolor="Lavender " color="white">
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Death Of Birth</th>
                <th>Gender</th>
                <th>Social Security Number</th>
                <th>Facility Name</th>
            </tr>
            <tr>
                <td>
                    <?php
                    if (array_key_exists('last_name', $data) && !empty($data['last_name'])) {
                        echo $data['last_name'];
                    } else {
                        echo "Not provide";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if (array_key_exists('first_name', $data) && !empty($data['first_name'])) {
                        echo $data['first_name'];
                    } else {
                        echo "Not provide";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if (array_key_exists('middle_name', $data) && !empty($data['middle_name'])) {
                        echo $data['middle_name'];
                    } else {
                        echo "Not provide";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if (array_key_exists('date_of_birth', $data) && !empty($data['date_of_birth'])) {
                        echo $data['date_of_birth'];
                    } else {
                        echo "Not provide";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if (array_key_exists('gender', $data) && !empty($data['gender'])) {
                        echo $data['gender'];
                    } else {
                        echo "Not provide";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if (array_key_exists('social_security_number', $data) && !empty($data['social_security_number'])) {
                        echo $data['social_security_number'];
                    } else {
                        echo "Not provide";
                    }
                    ?>
                </td>
                <td>
                    <?php
                    if (array_key_exists('facility_name', $data) && !empty($data['facility_name'])) {
                        echo $data['facility_name'];
                    } else {
                        echo "Not provide";
                    }
                    ?>
                </td>
            </tr>

        </table>
        <br/><br/>
    </body>
</html>
<?PHP } ?>