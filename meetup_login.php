<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>meetup.com/login.php</title>
  <link rel="stylesheet" href="stylesheet2.css">
</head>
<body>
  <p>
    <img src="Meetup_Logo_2015.png" height=100px width=148px class="image">
    <a href="meetup_home.php">Go Back</a></p>
  <div>
  <form action="login.php" method="POST">
    <input type="text" placeholder="Enter your username" name="username" class="for"><br>
    <input type="password" placeholder="Enter Password" name="password" class="for"><br>
    <center><button type="submit" name="submit" class="for">LOGIN</button>
    <input type="button" value="NEW USER" class="for" onclick="location.href='meetup_reg.php';">
    </center>
  </form>
  &nbsp; <a href="meetup_forpass.php">Forgot Password</a>
</div>
</body>
</html>
