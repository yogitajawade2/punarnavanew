<?php
        $con=mysqli_connect('localhost','punarnav_db','punarnava@123')OR die("could not connect to server");
        mysqli_select_db($con,'punarnav_punarnava')OR die("could not connect to database");
        session_name('auth');
        session_start();
        require_once('includes/validate.php');
?>
