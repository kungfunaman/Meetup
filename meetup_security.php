<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>meetup.com/security.php</title>
     <link rel="stylesheet" href="stylesheet4.css">
   </head>
   <body>
     <p>
       <img src="Meetup_Logo_2015.png" height=100px width=148px class="image">
       <a href="meetup_login.php">Go Back</a></p>
       <div>
       <form action="securelogin.php" method="POST">
        SECURITY QUESTION: <?php echo $_SESSION['u_question']; ?><br>
        ANSWER:<input type="text" placeholder="Enter your Answer" name="answer" class="for"><br>
        NEW PASSWORD:<input type="password" placeholder="Enter New Password" name="newpassword" class="for"><br>
        <center><button type="submit" name="submit" class="for">SUBMIT</button></center>
   </body>
 </html>
