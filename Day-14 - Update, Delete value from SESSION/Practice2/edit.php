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
        <meta name="description" content="Learn how to work CRUD Using Session">
	<meta name="keywords" content=" CRUD Using session, add data to session,
              how to remove data from session, how to delete session, 
              how crud work with session, php session tutorial">
        <meta name="author" content="Md. Abutaleb ">
    </head>
    <body bgcolor="whitesmoke">
        <div align="center">
            <a href="index.php">
                <input type="button" value="Back To List View">
            </a><br/>
            <a href="form.html">
                <input type="button" width="400px" value=" Add new data  ">
            </a>
        </div><br/><br/>     
        <form action="edited.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $_GET ['id'];?>">
        <table border="0" cellpadding="5" align="center">
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
                    <input type="text" name="last_name" id="lname" value="<?php
                    if (array_key_exists('last_name', $data) && !empty($data['last_name'])) {
                        echo $data['last_name'];
                    } else {
                        echo "Not provide";
                    }
                    ?>"
                    >
                </td>
                <td>
                    <input type="text" name="first_name" id="fname" value="<?php
                    if (array_key_exists('first_name', $data) && !empty($data['first_name'])) {
                        echo $data['first_name'];
                    } else {
                        echo "Not provide";
                    }
                    ?>"
                    >
                    
                </td>
                <td>
                    <input type="text" name="middle_name" id="mname" value="<?php
                    if (array_key_exists('middle_name', $data) && !empty($data['middle_name'])) {
                        echo $data['middle_name'];
                    } else {
                        echo "Not provide";
                    }
                    ?>"
                    >
                    
                </td>
                <td>
                    <input type="text" name="date_of_birth" id="date_of_birth" value="<?php
                    if (array_key_exists('date_of_birth', $data) && !empty($data['date_of_birth'])) {
                        echo $data['date_of_birth'];
                    } else {
                        echo "Not provide";
                    }
                    ?>"
                    >
                    
                </td>
                <td>
                    <input type="text" name="gender" value="<?php
                    if (array_key_exists('gender', $data) && !empty($data['gender'])) {
                        echo $data['gender'];
                    } else {
                        echo "Not provide";
                    }
                    ?>">
                    
                    
                </td>
                <td>
                    <input type="text" name="social_security_number" id="ssn" value="<?php
                    if (array_key_exists('social_security_number', $data) && !empty($data['social_security_number'])) {
                        echo $data['social_security_number'];
                    } else {
                        echo "Not provide";
                    }
                    ?>"
                    >
                    
                </td>
                <td>
                    <input type="text" name="facility_name" id="facility_name" value="<?php
                    if (array_key_exists('facility_name', $data) && !empty($data['facility_name'])) {
                        echo $data['facility_name'];
                    } else {
                        echo "Not provide";
                    }
                    ?>"
                    >
                    
                </td>              
            </tr>  
            <tr>
                <td align="center" colspan="7"><br/>
                    <input type="submit" width="100" value="Update All Info">
                </td>
            </tr>
        </table>
        </form>
        <br/><br/>
    </body>
</html>
<?PHP } ?>