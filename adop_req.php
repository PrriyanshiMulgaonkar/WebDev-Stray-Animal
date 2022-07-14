<?php
// echo "aagya";
include ('database.php');
session_start();
$name = $_SESSION['ngo_name'];
// $ngo_id = $_SESSION['ngo_id'];
// echo "name is : ".$name;
$res = getAdoption($_GET);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ashiyana</title>
    <script src="jquery-3.6.0.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .top {
            height: 50px;
            background-color: #f09ea3;
            display: flex;
        }

        .logo {
            width: 33.33%;
        }

        .logo img {
            margin-left: 20px;
            margin-top: 5px;
            width: 45px;
        }

        #nav_head {
            width: 33.33%;
            text-align: right;
            margin-right: 10px;
        }

        #name {
            margin-top: 10px;
            width: 33.33%;
        }

        #nav_head button {

            /* margin-left: 80%; */
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
            /* padding: auto; */
            border-radius: 40px;
        }

        .about {
            display: flex;
            color: white;
            text-align: center;
        }

        .about div {
            border: 2px;
            color: black;
            height: 40px;
            background-color: #E97B7B;
            width: 49%;
            margin: 6px;
        }

        .about div h3 {
            margin-top: 7px;
        }

        .adopted {
            margin: 0 6px;
            background-color: #FAABAB;
            height: 400px;
        }

        .request {
            margin: 0 6px;
            background-color: #FAABAB;
            height: 500px;
        }

        #adopt {
            cursor: pointer;
            ;
        }

        #req {
            cursor: pointer;
        }
        .req{
            padding: 0 5px;
            background-color : pink;
               }
    </style>
    <script>
        $(document).ready(function () {
            $("#adopt").click(function () {
                $(".adopted").slideToggle();
                $(".request").hide();
            });
        });

        $(document).ready(function () {
            $("#req").click(function () {
                $(".adopted").hide();

                $(".request").slideToggle();
            });
        });
    </script>
</head>

<body>
    <section class="top">
        <div class="logo">
            <img src="logoo.png" alt="logo">
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
            <a href="adop_req.php">Request</a>
            <a href="donation.php">Donation</a>
            <a href="add.php">Add</a>
        </div>
    </section>
    <section class="about">
        <div id=adopt>
            <h3>Adopted</h3>
        </div>
        <div id="req">
            <h3>Request</h3>
        </div>
    </section>
    <hr color="white">
    <section class="adopted" hidden>
        <center>
            <div>
                <center>
                    <table>
                        <tr>
                            <td><img src="dog.jpeg" alt="pet image" width="110px"
                                    style="margin: 10px; margin-right:20px;"></td>

                            <td>
                                <p>Animal : Pomerian</p>
                                <br>
                                <em>
                                    <p>Adopted by - Neelesh Sharma</p>
                                </em>
                                <p><em>Adopted on</em> : 12th Dec 2021</p>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="dog.jpeg" alt="pet image" width="110px"
                                    style="margin: 10px; margin-right:20px;"></td>

                            <td>
                                <p>Animal : German</p>
                                <br>
                                <em>
                                    <p>Adopted by - Neelesh Sharma</p>
                                </em>
                                <p><em>Adopted on</em> : 12th Dec 2021</p>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="dog.jpeg" alt="pet image" width="110px"
                                    style="margin: 10px; margin-right:20px;"></td>

                            <td>
                                <p>Animal : Bulldog</p>
                                <br>
                                <em>
                                    <p>Adopted by - Neelesh Sharma</p>
                                </em>
                                <p><em>Adopted on</em> : 12th Dec 2021</p>
                            </td>
                        </tr>
                    </table>
            </div>
        </center>
    </section>

    <section class="request" hidden>
        <center>
            <div>
                <center>
                    <table cellspacing = "10" border = 2px solid black>
                    <tr>
                        <th>user Name</th>
                        <th>Pet Information</th>
                        <th>Have Pet</th>
                        <th>Request</th>
                    </tr>
                    <tr>
                <?php

                    while($arr = mysqli_fetch_array($res))
                    {
                ?>
                <tr>
                    <td><?php echo $arr['Name']?></td>
                    <td><?php echo $arr['Info']?></td>
                    <td><?php echo $arr['have_pet'];?></td>
                    <td><form action="request.php" method = "get"><input type="text" name="adoption_id" value= <?php echo $arr['adoption_id'] ?> readonly hidden>
                        <input type="submit" class= 'req' name="request" value="Approve" ></form>
                        <br><center> 
                        <form action="request.php" method = "get">
                        <input type="text" name="adoption_id" value= <?php echo $arr['adoption_id'] ?> readonly hidden>
                        <input type="submit" class= 'req' name="request" value="Reject"></form></center></td>
                </tr>
                <?php
                    }
                    ?>
            </tr>
                    </table>
            </div>
        </center>
    </section>
    <hr color="white">
    <div style="background-color: #f09ea3; height: 30px; padding-top: 5px;">
        <center>
            <p>ashiyana.com</p>
        </center>
    </div>
</body>

</html>