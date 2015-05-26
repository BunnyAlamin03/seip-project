<?php
//Here, we use unserialize() to load session data to the 
// $session_data array from the string selected from a database. 
// This example comlements the one described with serialize().

$conn =  odbc_connect(webdb, $php, $chicken);
$stmt = odbc_prepare($conn, "SELECT data From sessions WHERE id= ?");
$sqldata = array($_SERVER['PHP_AUTH_USER']);
if (!odbc_execute($stmt, $sqldata) || !odbc_fetch_into($stmt, $tmp)){
    // if the execute or fetch fails, initialize to emmty array 
    $session_data = array();
}
    else{
        //we should now have the serialized data in $tmp[0].
        $session_data = unserialize($tmp[0]);
        if(!is_array($session_data)){
            //something went wrong, initialize to emty array
            $session_data = array();
        }
    }
   ?>