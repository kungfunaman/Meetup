<?php
session_start();
include_once 'login_system.php';
$username = mysqli_real_escape_string($conn,$_POST['username']);
$sql = "SELECT * FROM users WHERE user_username='$username'";
$result = mysqli_query($conn, $sql);
$resultCheck = Mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
if($resultCheck < 1)
{
  header("Location: /meetup_login.php?forgotpassword=wrongusername");
  exit();
}
else {
  $_SESSION['u_id'] = $row['user_id'];
  $_SESSION['u_name'] = $row['user_name'];
  $_SESSION['u_gender'] = $row['user_gender'];
  $_SESSION['u_username'] = $row['user_username'];
  $_SESSION['u_email'] = $row['user_email'];
  $_SESSION['u_password'] = $row['user_password'];
  $_SESSION['u_music'] = $row['user_music'];
  $_SESSION['u_dancing'] = $row['user_dancing'];
  $_SESSION['u_reading'] = $row['user_reading'];
  $_SESSION['u_partying'] = $row['user_partying'];
  $_SESSION['u_sleeping'] = $row['user_sleeping'];
  $_SESSION['u_question'] = $row['user_question'];
  $_SESSION['u_answer'] = $row['user_answer'];
  header("Location: meetup_security.php?forgotpassword=securitycheck");
  exit();
}
