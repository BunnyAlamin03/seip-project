<?php

session_start();
$data = $_SESSION['forminfo'];
echo $_SESSION['message'] . $data['flname'];

?>