<?php
  session_start();
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>meetup.com/meetup.php</title>
    <link rel="stylesheet" href="stylesheet5.css">
  </head>
  <body>
    <p>
      <img src="Meetup_Logo_2015.png" height=100px width=148px class="image">
      <a href="meetup_profile.php">Go Back</a>
    </p>
    <br>
    <br>
    <div>
      <section>
        <h1><u>PEOPLE WITH SAME INTRESTS</u></h1>
        <h4>
        <ol>
            <?php
            include_once 'meetup.php';
            ?>
          </ol>
        </h4>
      </div>
  </body>
</html>
