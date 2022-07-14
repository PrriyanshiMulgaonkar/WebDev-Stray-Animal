<?php
  session_start();
  $name = $_SESSION['u_name'];
?>
<?php

$con = mysqli_connect('localhost', 'root', '', 'stray_animal') or die("connection failed");

$query = "select * from animal";
$res = mysqli_query($con, $query);

?>
<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Home page</title>
    <script></script>
    <style>
      h1{
          color: black;
          text-align: center;
      }
      h3{
          color:slategray ;
          text-align: center;
      }
      p{
          color: slategray;
      }
      div.gallery {
  margin: 5px;
  /* border: 1px solid #ccc; */
  float: left;
  width: 180px;
  position: sticky;
}
.member img {
            margin-top: 20px;
            padding: 10px;
            width: 13%;
        }
div.gallery img {
  width: 100%;
  height: 100px;
  position: sticky;
}
div.desc {
  text-align: center;
}
.button {
  background-color:#f09ea3;
  border: none;
  color: white;
  padding: 10px 12px;
  text-align: center;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  position: sticky;
  margin-left: 27%;
}
.button1 {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
.container{
    background-color:#f09ea3;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: rgb(239, 255, 192);
   text-align: center;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.banner{
  width: 100%;

}
.banner img{
  width: 100%;
}
.images{
  width: 200px
  margin: 20px;
  margin-left: 22%;
}
.images div{
  padding: 26px;
}
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
            width: 40%;
            /* background-color: blanchedalmond; */
        }

        .logo img {
            margin-top: 5px;
            margin-left: 40px;
            width: 45px;
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
        .user_menu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 5px;
            z-index: 2;
            text-align: left;
          }
          
          .user:hover .user_menu {
            display: block;
          }
          
          .user_menu a {
          /* margin-left :80%; */
            text-decoration: none;
            color: black;
            margin-top: 10px;
            margin-right: 5px;
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
    <!-- <div id="nav_head" class="user">
        <button><?php echo $name; ?></button>
        <!-- <p style="margin-top:15px"></p> -->
        <!-- <div class="user_menu">
          <a href="history.php">My History</a><br>
          <hr>
          <hr>
          <a href="logout.php">Log Out</a>
          <hr>
          <hr>
        </div> --> 
    </div>
</section>


<section>
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
    <section class="images">
    <div class="gallery">
<center>
      <table cellspacing = "10px" style = "width : 300px;">
                        
                        <?php
                        while ($arr = mysqli_fetch_array($res)) {
                        ?>
                            <tr>
                                <td><img src="<?php echo $arr['image']; ?>" alt="image"></td>
                                <!-- <center> -->
                                    <td><p><?php echo $arr['pet_name'] ?></p></td>
                                    <td>
                                        <p><?php echo $arr['pet_info'] ?></p></td>
                                   <td><a href="a.html"><button class="button button1">Adopt</button></a></td>
                                   
                                <!-- </center> -->
                            </tr>
                        <?php
                        }
                        ?>
                        </tr>
                    </table>
                    </center>
                    </div
      </section>
      
</body>
</html>
