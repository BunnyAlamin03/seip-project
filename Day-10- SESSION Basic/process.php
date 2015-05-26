    <?php
    include_once './lib/applications.php';

//    $_SESSION['mylname']= array();
    if(!array_key_exists('mylname', $_SESSION)){
        $_SESSION['mylname'] = array();
    }
    if(array_key_exists('lastname', $_POST) && !empty($_POST['lastname'])){
        $_SESSION['mylname'][] = $_POST['lastname'];
        $msg = "New Information Has Been Added";
        $_SESSION['message'] = $msg;
        header('location: index.php');
}
    else {
        $msg = " Please fill the full information :";
        $_SESSION['message'] = $msg;
        header('location: index.php');
    }
    
    /// For first name 
    if(array_key_exists('firstname', $_POST) && !empty($_POST['firstname'])){
        $_SESSION['myfname'][] = $_POST['firstname'];
//        $msg = "New Information Has Been Added";
//        $_SESSION['message'] = $msg;
        header('location: index.php');
}
    else {
        $msg = " Please fill the full information :";
        $_SESSION['message'] = $msg;
        header('location: index.php');
    }
    
    
    debug($_SESSION);
//    Counting Session
    $count_session = count($_SESSION);
    echo "Number of Session is : ".$count_session;
    
    // Counting First Name 
    
    $count_first_name = count($_SESSION['mylname']);
    echo "<br/>". "Number of First Name is : ".$count_first_name;
    ?>

