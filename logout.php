<?php 
    //start the session
    session_start();
    //unset the session variables
    $_SESSION = array();
    //destroy the session
    session_destroy();
    //Redirect the user to the home page
    header("Location: index.php");
    exit;

?>