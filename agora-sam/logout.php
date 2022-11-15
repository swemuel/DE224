<?php 
    include('header.php');

    //session_start();
    $db->__destruct();
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(),'',0,'/');
    header("Location: login.php");