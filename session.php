<?php
include('database.php');
$type = $_GET['type'];
if ($type == 'ngo'){
session_start();

$res = loginngo($_GET);
$mail = $res['mail_Id'];
$_SESSION['mail_Id'] = $mail;
header('location:user_home.php');
}

else if ($type == 'user')
{
    session_start();

$res = loginuser($_GET);
$u_name = $res['u_name'];
$_SESSION['u_name'] = $u_name;
header('location:user_home.php');
}
else if ($type == 'ngo')
{
    session_start();

$res = loginngo($_GET);
$u_name = $res['email'];
// $_SESSION['username'] = $u_name;
header('location:ngo_home.html');
}

?>