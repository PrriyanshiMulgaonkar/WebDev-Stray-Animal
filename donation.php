<?php
include('database.php');
$res=donation($_GET);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashiyana</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .top {
            height: 50px;
            background-color: #f09ea3;
            /* opacity: 33%; */
            display: flex;
        }

        .logo {
            width: 33.33%;
            /* background-color: blanchedalmond; */
        }

        .logo img {
            margin-top: 5px;
            margin-left: 20px;
            width: 60px;
        }

        #name{
            margin: 10px;
            /* background-color: blanchedalmond; */
            width: 33.33%;
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
            /* background-color: white; */
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

        .tbl{
            /* border-style: solid;
            border-width: 2px 2px;
            border-color: black; */
            border: 1px solid black;
            background-color: #E97B7B;
        }
        table, th, td{
            border: 1px Solid black;
            text-align:center;
        }
        
        .donate{
            width: 500px;
        }
        .don{
            /* margin-left: 40%; */
            /* width: 50%; */
            padding: 30px;
            background-color: #FAABAB;
        }
    </style>
</head>

<body>
    <section class="top">
        <div class="logo">
            <img src="img/logo1.png" alt="logo">
        </div>
        <div id="name">
            <center>
                <h1>Ashiyana</h1>
            </center>
        </div>
        <div id="nav_head">
            <button>NGO Name</button>
        </div>
    </section>
    <section class="navigation">
        <div class="navtopics">
            <a href="ngo_home.php">Home</a>
            <a href="adop_req.html">Request</a>
            <a href="donation.php">Donation</a>
            <a href="add.php">Add</a>
        </div>
    </section>
    <section class = "don" id="don">
        <div align="center"><b><p style="font-size: 20px;">Kindly Find the Donor Details Below</p></b></div>
        <br> 
        <center>
        <div class="donate">
        <table align="center">
                    <tr>
                        <th>Donar Name</th>
                        <th>ngo_name </th>
                        <th>Amount </th>
                        <th>Contact No </th>
                    </tr>
                    <tr>
                <?php

                    while($arr = mysqli_fetch_array($res))
                    {
                ?>
                <tr>
                    <td><?php echo $arr['donar_name']?></td>            
                    <td><?php echo $arr['ngo_name'];?></td>
                    <td><?php echo $arr['amount'];?></td>
                    <td><?php echo $arr['contact_no'];?></td>
                </tr>
                <?php
                    }
                    ?>
            </tr>
                </table> 
        </div>
    </center>
    </section>
    <div style="background-color: #f09ea3; height: 30px; padding-top: 5px;">
        <center>
            <p>ashiyana.com</p>
        </center>
    </div>
</body>

</html>