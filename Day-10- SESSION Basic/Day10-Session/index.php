<?php
include_once './lib/applications.php';
//$counter = 1;
//$my_last_name = $_SESSION['mylname'];
//foreach ($my_last_name as $last_name){
//    echo "$counter". " : ";
//    echo $last_name;
//    echo "<br/>";
//    $counter++;
//}
$lastname = $_SESSION['mylname'];
$firstname= $_SESSION['myfname'];
?>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <table border="1" cellpadding="10" >
            <h3>
                <?php
                if (array_key_exists('message', $_SESSION) && !empty($_SESSION['message'])) {
                    echo $_SESSION['message'];
                }
                ?>
            </h3>
            <tr>
                <th>SL</th>
                <th> Last Name </th>
                <th> First Name </th>
                <th> Middle Name </th>
                <th> Date of Birth </th>
                <th> Gender </th>
                <th> Social Security Number </th>
                <th> Facility Name </th>

            </tr>
            <?php $counter = 1;
                foreach ($lastname as $lastname){
                    
                }
                $counter = 1;
                foreach ($firstname as $firstname){
             ?>
            <tr>
                <td> <?php echo $counter++;?></td>
                <td><?php echo $lastname;?></td>
                <td><?php echo $firstname;?></td>
            </tr>
                <?php }?>
        </table>
    </body>
</html>