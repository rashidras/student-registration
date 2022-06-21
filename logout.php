<!-- logout and session destroy -->
<?php
    require_once "dbConnect.php";
    session_start();
    session_destroy();
    header('Location: login.php');
?>