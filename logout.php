<?php
session_start();
$mail = $_SESSION['u_name'];
if (isset($mail)) {
    session_destroy();
    header('location:home.html');   
}
?>