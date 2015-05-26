<?php
include_once 'lib/applications.php';
$data = '';
if (array_key_exists('formdata', $_SESSION)) {
    $data = $_SESSION['formdata']; // formdata > $data
}
//debug($data);
?>
<html>
    <head>
        <title><?php echo PAGE_TITLE ?></title>
    </head>
    <body bgcolor="whitesmoke">
        <section>
            <div align="center">
                <b>
                <a href="form.html">
                    <input type="button" width="400px" value=" Add new data  ">
                </a>
                </b></big><br/><br/>
                <?php
//                if(array_key_exists('delete_message', $_SESSION) && !empty($_SESSION['delete_message'])){
//                    echo $_SESSION['delete_message'];
//                ?>
            </div><br/>
            <table border="1" bgcolor="white" width="1000" cellpadding="5" align="center">
                <tr bgcolor="Lavender ">
                <th>SL NO </th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Death Of Birth</th>
                <th>Gender</th>
                <th>Social Security Number</th>
                <th>Facility Name</th>
                <th colspan="3" bgcolor="LavenderBlush   ">Action</th>
                <tr/>
                    <!--Data from first row-->
                <?PHP
                $counter = 1;
                if (isset($data) && !empty($data)) {
                    foreach ($data as $value) {
                        ?>
                <tr>
                    <td><?php echo $counter++; ?></td>
                    <td>
                    <?php
                        if (array_key_exists('last_name', $value) && !empty($value['last_name'])) {
                            echo $value['last_name'];
                        }else{
                            echo "Not Provide";
                        }
                        ?>
                    </td>
                    <td>
                    <?php
                        if (array_key_exists('first_name', $value) && !empty($value['first_name'])) {
                            echo $value['first_name'];
                        }else{
                            echo "Not Provide";
                        }
                        ?>
                    </td>
                    <td>
                    <?php
                        if (array_key_exists('middle_name', $value) && !empty($value['middle_name'])) {
                            echo $value['middle_name'];
                        }else{
                            echo "Not Provide";
                        }
                        ?>
                    </td>
                    <td>
                    <?php
                        if (array_key_exists('date_of_birth', $value) && !empty($value['date_of_birth'])) {
                            echo $value['date_of_birth'];
                        }else{
                            echo "Not Provide";
                        }
                        ?>
                    </td>
                    <td>
                    <?php
                        if (array_key_exists('gender', $value) && !empty($value['gender'])) {
                            echo $value['gender'];
                        }else{
                            echo "Not Provide";
                        }
                        ?>
                    </td>
                    <td>
                    <?php
                        if (array_key_exists('social_security_number', $value) && !empty($value['social_security_number'])) {
                            echo $value['social_security_number'];
                        }else{
                            echo "Not Provide";
                        }
                        ?>
                    </td>
                    <td>
                    <?php
                        if (array_key_exists('facility_name', $value) && !empty($value['facility_name'])) {
                            echo $value['facility_name'];
                        }else{
                            echo "Not Provide";
                        }
                        ?>
                    </td>
                    <td><a href="show.php?id=<?php echo $counter-2;?>">View</a></td>
                    <td><a href=edit.php?id=<?php echo $counter-2;?>>Edit</a></td>
                    <td><a href="delete.php?id=<?php echo $counter-2;?>">Delete</a></td>
                    
                </tr>
                
                <!--If no data available-->
                
                <?php } }
                else { ?>
                <tr>
                    <td colspan="9" align="center">
                    <?php echo "<h3><br/>No available data in the table</h3>"; ?><br/>
                    
                    </td>
                </tr>
                
                <?php } ?>
            </table>
        </section>
    </body>
</html>