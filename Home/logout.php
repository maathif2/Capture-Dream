<?php 	

    include "../config/config.php";
    include '../config/core.php';
    session_destroy();
    echo "You have logged out successfully!<br/>";
    header("Location:../Home/Home.php");

?>