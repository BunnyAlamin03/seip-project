<?php
include_once'./lib/applications.php';
//$mylastnames = $_SESSION['mylstnames'];
//$myfirstnames = $_SESSION['myfstnames'];
//$mymnames = $_SESSION['mymidnames'];


$_SESSION = $_POST[];
$allinfo = $_SESSION[];



//debug($mylastnames);

//echo "This is list of last names: <br/>";
//$counter = 1;
//foreach ($mylastnames as $lnames) {
//  echo $lnames. "<br/>"; 
//  echo $counter++. " : ";
//}
//echo "<br/>This is list of first names: <br/>";
//foreach ($myfirstnames as $fnames) {
//    echo $fnames. "<br/>";
//}
//echo "<br/>This is list of middle names: <br/>";
//foreach ($mymnames as $mnames) {
//    echo $mnames."<br/>";
//}

?>
<html>
    <head>
        <title>
            <?php echo PAGE_TITLE;?>
        </title>
    </head>
    <body>
        <h3>
        <?php
        if(array_key_exists('message', $_SESSION) && !empty($_SESSION['message'])){
            echo $_SESSION['message'];
        }
        ?>
        </h3>
        <table border="1" cellpadding="10">
            <tr>
                <th>SL</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
            </tr>
            <?php 
            $counter =1;
            foreach ($allinfo as $value){}
                    {
                ?>
            <tr>
                <td> <?php echo $counter++ ?></td>
                <td><?php echo $value['lastname'] ?></td>
                <td><?php echo $value['firstname'] ?></td>
                <td><?php echo $value['middlename'] ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>