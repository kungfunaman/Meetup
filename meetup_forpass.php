<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>meetup.com\forgot_password.php</title>
     <link rel="stylesheet" href="stylesheet4.css">
   </head>
   <body>
     <p>
       <img src="Meetup_Logo_2015.png" height=100px width=148px class="image">
       <a href="meetup_login.php">Go Back</a>
     </p>
     <div>
     <form action="forgot.php" method="POST">
        <input type="text" placeholder="Enter your username" name="username" class="for">
        <center><button type="submit" name="submit" class="for">LOGIN</button></center>
      </form>
   </body>
 </html>
