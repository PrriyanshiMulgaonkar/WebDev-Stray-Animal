<?php
   $con = mysqli_connect('localhost', 'root', '', 'stray_animal') or die("<h1>Connection Failed...</h1>");
    function loginuser($array)
    {
        global $con;

        $mail = $array['u_mail'];
        $password = $array['u_password'];

        $query = "select * from user where u_mail='$mail' and u_password = '$password'";
        echo $query;

        $result = mysqli_query($con, $query);
        $res = mysqli_fetch_array($result);
        return $res;
    }
    function loginngo($array)
    {
        global $con;

        $mail = $array['email'];
        $password = $array['password'];
        echo $mail;
        echo $password;

        echo $mail." : ".$password;

        $query = "select * from usser where email='$mail' and password = '$password'";
        echo $query;

        $result = mysqli_query($con, $query);
        $res = mysqli_fetch_array($result);
        return $res;
    }
    function getAdoption()
    {
        global $con;
        $adoption = "select * from adoption";
        $res = mysqli_query($con, $adoption);
        // $result = mysqli_fetch_array($res);
        return $res;
    }

    function acceptRequest($adoption_id, $request){
        global $con;
    $accept = "update adoption set Status = '$request' where adoption_id = $adoption_id";
    $res = mysqli_query($con, $accept);
    return $res;
    }
    function history($user_id){
        global $con;
    $query = "select * from adoption where user_id = 1 ";
    $result = mysqli_query($con, $query);
    return $result;
    }
    function donation(){
        global $con;
    $query = "select * from donation";
    $result = mysqli_query($con, $query);
    return $result;
    }

    ?>