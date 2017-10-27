<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>meetup.com/change.php</title>
    <link rel="stylesheet" href="stylesheet4.css">
  </head>
  <body>
    <p>
      <img src="Meetup_Logo_2015.png" height=100px width=148px class="image">
      <a href="meetup_profile.php">Go Back</a></p><br><br>
<center><h1>CHANGE PASSWORD</h1></center>
    <div>
      <form action="changepass.php" method="POST">
        OLD PASSWORD:<input type="password" placeholder="Enter Password" name="oldpassword" class="for"><br><br>
        NEW PASSWORD:<input type="password" placeholder="Enter Password" name="newpassword" class="for"><br><br>
        <button type="submit" name="submitpassword" class="for">SUBMIT CHANGES</button>
      </form>
        <h1>CHANGE INTERESTS</h1>
      <form action="change.php" method="POST">
        INTERESTS:<br><input type="checkbox" name="Music" value="Yes" class="for" <?php if ($_SESSION['u_music'] == '1') echo "checked='checked'"; ?>>Music<br>
        <input type="checkbox" name="Dancing" value="Yes" class="for" <?php if ($_SESSION['u_dancing'] == '1') echo "checked='checked'" ?>>Dancing<br>
        <input type="checkbox" name="Reading" value="Yes" class="for" <?php if ($_SESSION['u_reading'] == '1') echo "checked='checked'"; ?>>Reading<br>
        <input type="checkbox" name="Partying" value="Yes" class="for" <?php if ($_SESSION['u_partying'] == '1') echo "checked='checked'"; ?>>Partying<br>
        <input type="checkbox" name="Sleeping" value="Yes" class="for" <?php if ($_SESSION['u_sleeping'] == '1') echo "checked='checked'"; ?>>Sleeping<br><br>
        <button type="submit" name="submit" class="for">SUBMIT CHANGES</button>
      </form>
    </div>
  </body>
</html>
