<?php
$typ = $_POST['user'];
if($typ == "user"){
    $mail = $_POST['mail'];
$name = $_POST['name'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$password = $_POST['pass'];
// echo $typ.$name.$mail.$phone.$address.$password;
}
else if($typ == "ngo"){
    $mail = $_POST['mail'];
$n_name = $_POST['n_name'];
$phone = $_POST['phone'];
$head = $_POST['head'];
$office = $_POST['office'];
$password = $_POST['pass'];
// echo $typ.$name.$mail.$phone.$address.$password;
}
else if($typ == "add"){
$name = $_POST['name'];
$vacc = $_POST['vacc'];
$info = $_POST['info'];
$age = $_POST['age'];
$upload = $_POST['f_up'];
echo $typ.$name.$vacc.$info.$age.$upload;
}

else if($typ == "adop_form"){
    $name = $_POST['name'];
    $mobile = $_POST['Mobile'];
    $ques = $_POST['question'];
    $sub = $_POST['subject'];
    // echo $typ.$name.$mobile.$ques.$sub;
    }

 else if($typ == "user_donation"){
        $name = $_POST['name'];
        $ngo = $_POST['ngo_name'];
        $amo = $_POST['Amount'];
        $add = $_POST['Address'];
        $mobile = $_POST['Mobile'];
        $payment = $_POST['Payment'];
        echo $typ.$name.$amo.$add.$mobile.$payment;
        }
$con = mysqli_connect('localhost', 'root', '', 'stray_animal') or die("Connection Failed");

if ($con && $typ == 'user') {
    $query = "insert into user (u_mail, u_name, u_address, u_contact, u_password, s_id	) values('$mail', '$name', '$address', $phone, '$password', 5)";
    $result = mysqli_query($con, $query);
    header('location:login.html');
}
else if ($con && $typ == 'ngo') {
    $query = "insert into usser (ngo_name, email, contact_no, name_head, office_address, password,s_id) values('$n_name', '$mail', '$phone', '$head', '$office', '$password', 5)";
    $result = mysqli_query($con, $query);

    header('location:ngo.html');
}
else if ($con && $typ == 'add') {
    $query = "insert into animal (pet_name, pet_info, s_age, s_vaccinated, image) values('$name', '$info', $age, '$vacc', '$upload')";
    $result = mysqli_query($con, $query);
    echo $query;
    echo $result;
    header('location:ngo_home.php');
}
else if ($con && $typ == 'adop_form') {
    $query = "insert into adoption (user_id, Name, mobile_no, Info, have_pet) values(1, '$name', '$mobile', '$sub', '$ques')";
    $result = mysqli_query($con, $query);
    echo $query;
    echo $result;
    header('location:user_home.php');
}
else if ($con && $typ == 'user_donation') {
    $query = "insert into donation(donar_name,	ngo_name,amount,address, contact_no, 	ngo_id, user_id) values('$name','$ngo', $amo, '$add','$mobile',12, 5)";
    $result = mysqli_query($con, $query);
    echo $query;
    echo $result;
    header('location:user_home.php');
}





?>