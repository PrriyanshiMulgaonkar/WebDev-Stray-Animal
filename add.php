<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.cont{
                    background-color: white;
                    margin-left: 150px;
                    width: 30%;
                    text-align: center;
                    align-content: center;
                    margin-top:100px;
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

</style>
</head>
<body>
<section class="navigation">
    <div class="navtopics">
    <a href="ngo_home.php">Home</a>
            <a href="adop_req.php">Request</a>
            <a href="donation.php">Donation</a>
            <a href="add.php">Add</a>
    </div>
    <hr>
</section>
    <body background="bgg.jpg">
        <center>
        <div class="cont">
        
          <div>
          <br>
            <div class="content">
              <img src="logoo.png" alt="Logo" style="width:30%">
              <h1>Ashiyana</h1>
              <!-- <p>Add Animal Detail Form</p> -->
              <br>
            </div>
<h3>Add Animal Detail Form</h3>

<div class="container">
  <form action="insertion.php" method = "post">
    <input type="text" name="user" value="add" readonly hidden>
    <label for="name">Pet Name</label>
    <input type="text" id="name" name="name" placeholder="Enter Pet name..">

    <label for="info">Pet Information</label>
    <input type="text" id="info" name="info" placeholder="Your Pet Information">

    <label for="vacc">Is your pet vaccinated?</label>
    <select id="vacc" name="vacc">
      <option value="yes">Choose Vaccine Status</option>
      <option value="yes">Yes</option>
      <option value="no">No</option>
    </select>

    <label for="age">Age</label>
    <input type="text" id="age" name="age" placeholder="Enter approx age of pet">
    <label for="f_up">Pet Image</label>
    <br>
    <input type="file" id="f_up" name="f_up">
    <!-- <textarea id="subject" name="subject" placeholder="Enter approx age of pet" style="height:200px"></textarea> -->
<br><br>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>