<?php
    session_start();
    $name = $_SESSION['ngo_name'];

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
            width: 45px;
        }

        #name{
            margin: 10px;
            /* /* background-color: blanchedalmond;  */
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

        .banner img {
            width: 100%;
        }

        .about {
            background-color: black;
            height: 440px;
            color: white;
            text-align: center;
            /* display: flex; */
        }

        .about p {
            padding-top: 20px;
        }

        .member img {
            margin-top: 20px;
            padding: 10px;
            width: 13%;
        }

        #sec_part {
            display: flex;
            margin-top: 20px;
        }

        .heads {
            font-size: 40px;
        }

        .history {
            width: 45%;
            background-color: white;
            color: black;
            padding: 20px;
            margin-right: 10px
        }

        .mission {
            width: 45%;
            background-color: white;
            color: black;
            padding: 20px
        }

        .help {
            padding-top: 20px;
            height: 400px;
            text-align: center;
        }

        .cont {
            padding-top: 20px;
            background-color: black;
            height: 200px;
            color: white;
        }

        .thanks {
            display: flex;
            padding: 20px;
        }

        .spc_thank {
            margin-left: 45px;
            width: 30%;
        }

        .spc_thank img {
            margin-bottom: 20px;
            width: 50%;
        }
    </style>
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
            <button><?php echo $name ?></button>
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
    <section>
        <div class="banner">
            <img src="ngoo.png" alt="banner - Ashiyana">
        </div>
    </section>
    <section class="about">
        <div class="member">
            <b>
                <p class="heads">Team Member</p>
            </b>
            <div style="background-color: black;">
                <img src="placeholder.jpeg" alt="NGO Head">
                <p style="font-size: 30px;">NGO Head</p>
                <p style="font-size: 25px;">Miss Piyanshi Mulgaonkar</p>
            </div>
        </div>
    </section>

    <section class="help">
        <div class="heads">
            <p>Special Thanks</p>
            <div class="thanks">
                <div class="spc_thank">
                    <img src="placeholder.jpeg" alt="NGO Head">
                    <p style="font-size: 20px;">Registrar</p>
                    <p style="font-size: 15px;">Mr. Ajay sharma</p>
                </div>
                <div class="spc_thank">
                    <img src="placeholder.jpeg" alt="NGO Head">
                    <p style="font-size: 20px;">NGO CEO</p>
                    <p style="font-size: 15px;">Mr. Naresh Tripathi</p>
                </div>
                <div class="spc_thank">
                    <img src="placeholder.jpeg" alt="NGO Head">
                    <p style="font-size: 20px;">Pet Doctor</p>
                    <p style="font-size: 15px;">Mr. Naresh Oberoi</p>
                </div>
            </div>
        </div>
    </section>
    <section class="cont">
        <center>
            <form action="">
                <table>
                    <tr>
                        <td><label for="nm">Name : </label></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="nm" name="nm"><br><br></td>
                    </tr>
                    <tr>
                        <td><label for="query">Enter Your Query : </label></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="query" name="query"><br><br></td>
                    </tr>
                    <tr>
                        <td align="center"><input type="submit" value="Submit Query"></td>
                    </tr>
                </table>
            </form>
        </center>
    </section>
    <div style="background-color: #f09ea3; height: 30px; padding-top: 5px;">
        <center>
            <p>ashiyana.com</p>
        </center>
    </div>
</body>

</html>