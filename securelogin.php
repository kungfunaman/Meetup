<?php
session_start();
include_once 'login_system.php';
$answer = mysqli_real_escape_string($conn,$_POST['answer']);
$newpassword = mysqli_real_escape_string($conn,$_POST['newpassword']);
if($answer == $_SESSION['u_answer'])
{
  $_SESSION['u_password'] = password_hash($newpassword, PASSWORD_DEFAULT);
  $sql = "UPDATE users SET user_password = '$_SESSION[u_password]' WHERE user_id = '$_SESSION[u_id]'";
  mysqli_query($conn, $sql);
  header("Location: meetup_login.php?changepassword=successful");
  exit();
}
else {
  header("Location: meetup_login.php?changepassword=wronganswer");
  exit();
}
