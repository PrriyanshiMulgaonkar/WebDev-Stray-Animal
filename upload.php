<?php
$name = $_POST['nm'];
$FILE  = $_FILES['pic'];
echo"<pre>";
print_r($FILE);

$tempath = $_FILES['pic']['tmp_name'];
// echo $tempath;
// echo "<br>";
$fname = $_FILES['pic']['name'];
// echo $fname;
$a = explode(".", $fname);
$text = $a[count($a)-1];
// echo "<br>".$text;
$newname = time().".".$text;
// echo "<br>".$newname;

$uploadpath = "upload/$newname";
// echo "<br>".$uploadpath;

$res = move_uploaded_file($tempath, $uploadpath);
// echo "<br>".$res;

if($res == 1)
{
    $con = mysqli_connect('localhost', 'root', '', 'training') or die("<h1>Connection Failed</h1>");
    $query="insert into upload (name, filepath) values ('$name', '$uploadpath')";
    $res = mysqli_query($con, $query);
    // echo "<br>".$res;
    // if ($res)
    // {
    //     echo "image uploaded...";
    // }
    // else {
    //     echo "image not uploaded";
    // }
}


?>