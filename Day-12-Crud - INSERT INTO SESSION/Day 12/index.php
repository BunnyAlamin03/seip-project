 <?php
include_once('lib/application.php');
$data = "";
$data = $_SESSION['myemails'];
 
?>


<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
            <tr>
                <th>SL</th>
                <th>Email </th>
                <th>Action</th>
            </tr>
            <?php
            $counter=0;
            foreach ($data as $email) {
                $counter++;
                ?>
            <tr>
            <th><?php  echo $counter;?></th>
            <th><?php echo $email."<br/>"?></th>
            <th>. . .</th>
            </tr>
            
            <?php  } ?>
            <h2><a href="form.html">Click Here</a> to Add new email</h2>
        </table>
    </body>
</html>
