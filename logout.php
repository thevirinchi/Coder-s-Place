<?php
    session_start();
    if($_SESSION['usn'] != ""){
        session_destroy();
        session_reset();
        ob_start();
        header('location: index.php');
        ob_end_flush();
        die();
    }
?>