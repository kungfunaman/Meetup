<?php
session_start();
include_once 'login_system.php'
?>

<!DOCTYPE html>
<html>
<head>
  <title>meetup.com/profile.htm</title>
  <link rel="stylesheet" href="stylesheet4.css">
</head>
<body>
  <p>
    <img src="Meetup_Logo_2015.png" height=100px width=148px class="image">
  </p>
  <br><br><br><br>
  <div>
    <section>
  <h1><u>YOUR PROFILE</u></h1>
  <h4>
  <?php
    echo "NAME: " . $_SESSION['u_name'] . "<br>";
    echo "GENDER: " . $_SESSION['u_gender'] . "<br>";
    echo "EMAIL: " . $_SESSION['u_email'] . "<br>";
    echo "USERNAME: " . $_SESSION['u_username'] . "<br>";
    echo "INTERSTS: ";
    if($_SESSION['u_music'] == "1")
    {echo "Music ";}
    if($_SESSION['u_dancing'] == "1")
    {echo "Dancing ";}
    if($_SESSION['u_reading'] == "1")
    {echo "Reading ";}
    if($_SESSION['u_partying'] == "1")
    {echo "Partying ";}
    if($_SESSION['u_sleeping'] == "1")
    {echo "Sleeping ";}
  ?>
</h4>
<form action="logout.php" method="POST">
  <input type="button" name="button" class="for" value="MEETUP" onclick="location.href='meetup_meetup.php'">
  <input type="button" name="button1" class="for" value="CHANGE YOUR DATA" onclick="location.href='meetup_change.php'">
  <button type="submit" name="submit" class="for">Logout</button>
</form>
</section>
</div>
</body>
</html>
