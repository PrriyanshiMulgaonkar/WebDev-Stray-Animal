<?php
// echo "aagya";
include ('database.php');
session_start();
$name = $_SESSION['u_name'];
$user_id = $_SESSION['user_id'];
echo $user_id;
// echo "name is : ".$name;
$result = history($user_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .user {
            position: relative;
            display: inline-block;
        }

        #ui {
            width: 20px;
            height: 20px;
            margin-right: 0;
        }
        .user_menu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 80px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 5px;
            z-index: 2;
            text-align: center;
        }

        .user:hover .user_menu {
            display: block;
        }

        .user_menu a {
            text-decoration: none;
            color: black;
            margin-top: 10px;
        }
        .his_note{
            /* margin: 0;
            padding: 0; */
            background-color: orange;
            width: 99.4%;
            height: 200px;
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        .his_note p{
            margin-top: 10px;
            padding: 5px;
        }
        .his_tbl{
            background-color: rgb(200, 122, 0);
            width: 99.4%;
            height: 200px;
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        table{
            /* margin-top: 20px; */
            border: 2px solid black;
        }
        table, th, td{
            border: 1px Solid black;
            text-align:center;
        }
        #nav_head {
            width: 33.33%;
            text-align: right;
            margin-left: 120px;
        }

        #nav_head button {
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 10px;
            padding-right: 10px;
            margin-top: 10px;
            border-radius: 50px;
        }

        .navtopics {
            display: flex;
            width: 100px;
            align-items: center;
            background-color: white;
            margin-left: 15px;
            padding: 15px;
        }

        .navtopics a {
            color: black;
            text-decoration: none;
            margin-right: 20px;
        }

        .navtopics a:hover {
            color: blue;
            background-color: rgba(128, 128, 128, 0.5);
            padding: 3px 3px;
            border-radius: 40px;
        }

        #name{
          margin-top: 5px;
          width: 20%;
        }
        .banner{
  width: 100%;

}
.banner img{
  width: 100%;
}
    </style>
</head>
<body>
<section class="navigation">
    <div class="navtopics">
        <a href="#home">Home</a>
        <!-- <a href="notification.html">Notification</a> -->
        <!-- <a href="return">Return</a> -->
        <a href="user_donate.html">Donation</a>
        <a href="logout.php">Logout</a>
        <a href="history.php">History</a>
    </div>
</section>
    <section id="home">
      <div class="banner">
        <img src="user_header.png" alt="">
      </div>
    </section>

        <section class="his_note">
            <div >
                <b><p style="font-size: 30px;">Your Order History</p></b>
                <p style="font-size: 15px;">Find Your Order History Below in the Page</p>
            </div>
        </section>
        
        <section class="his_tbl">
            <center>
                <br><br>
            <div>
                <table align="center">
                    <tr>
                        <th>Pet Info </th>
                        <th>Request Status </th>
                    </tr>
                    <tr>
                <?php

                    while($arr = mysqli_fetch_array($result))
                    {
                ?>
                <tr>
                    <td><?php echo $arr['Info'];?></td>            
                    <td><?php echo $arr['Status'];?></td>
                </tr>
                <?php
                    }
                    ?>
            </tr>
                </table>    
            </div>
            </center>
        </section>


</body>
</html>