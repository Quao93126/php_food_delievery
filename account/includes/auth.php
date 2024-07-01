<?php
    // session_start();
    if($_SESSION['name']!=true)
    {
    header("location: index.php");
    }
    $username = $_SESSION['username'];
?>