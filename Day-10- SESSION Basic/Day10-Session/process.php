<?php

include_once './lib/applications.php';
// Session, Array & Message for last name
if (!array_key_exists('mylname', $_SESSION)) {
    $_SESSION['mylname'] = array();
}
if (array_key_exists('lastname', $_POST) && !empty($_POST['lastname'])) {
    $_SESSION['mylname'][] = $_POST['lastname']; // Session for last name
    $msg = "New Information Has Been Added";
    $_SESSION['message'] = $msg; // Session for message 
    header('location: index.php'); // redirecto to index page 
} else {
    $msg = " Please fill the full information :";
    $_SESSION['message'] = $msg;
    header('location: index.php');
}

// Session, Array & Message for First Name name
if (!array_key_exists('mylname', $_SESSION)) {
    $_SESSION['mylname'] = array();
}
if (array_key_exists('lastname', $_POST) && !empty($_POST['lastname'])) {
    $_SESSION['myfname'][] = $_POST['firstname']; // Session for first name
    header('location: index.php'); // redirecto to index page 
} else {
    header('location: index.php');
}

debug($_SESSION);
//    Counting Session
$count_session = count($_SESSION);
echo "Number of Session is : " . $count_session;

// Counting First Name 

$count_first_name = count($_SESSION['mylname']);
echo "<br/>" . "Number of First Name is : " . $count_first_name;
?>

