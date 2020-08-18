<?php


session_start();
if(NULL!== ('email')) {
    header('location: login.php');
}
session_destroy();
header('location: index.php');
?>
