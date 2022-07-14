<?php

include('database.php');
$typ = $_GET['user'];
// $type = $_P['user'];
echo $typ;
if($typ == 'user'){
session_start();
$res = loginuser($_GET);
$name = $res['u_name'];
$user_id=$res['user_id'];
$_SESSION['user_id'] = $user_id;
$_SESSION['u_name'] = $name;
// echo "$name";
header('location:user_home.php');
}

if ($typ == 'ngo'){
session_start();
$res = loginngo($_GET);
$name = $res['ngo_name'];
$ngo_id = $res['ngo_id'];
$_SESSION['ngo_name'] = $name;
$_SESSION['ngo_id'] = $ngo_id;
// echo "$name";
header('location:ngo_home.php');
}
?>