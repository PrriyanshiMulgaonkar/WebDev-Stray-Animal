<?php
$request = $_GET['request'];
// if ($request = 'request')
    // $request = $_GET['request'];

    // if ($request == 'Accepted')
    $adoption_id = $_GET['adoption_id'];
    include('database.php');
    $acc = acceptRequest($adoption_id, $request);
    header('location:adop_req.php');

?>