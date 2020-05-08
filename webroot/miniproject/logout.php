<?php
    session_start();
    $_SESSION['login']=false;
    //remove all session variables
    session_unset();

    //destroy the session
    session_destroy();
    header("Location: index.php");
?>