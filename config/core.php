<?php 
session_start();
    if(isset($_COOKIE['user_id'])){
        $_SESSION['user_id'] = $_COOKIE['user_id'];
    }

    if(isset($_COOKIE['photog_id'])){
        $_SESSION['photog_id'] = $_COOKIE['photog_id'];
    }

?>