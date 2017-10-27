<?php
session_start();
include_once 'login_system.php';
$oldpassword = mysqli_real_escape_string($conn,$_POST['oldpassword']);
$newpassword = mysqli_real_escape_string($conn,$_POST['newpassword']);
$hashedPwdCheck = password_verify($oldpassword, $_SESSION['u_password']);
if($hashedPwdCheck == true)
{
  $_SESSION['u_password'] = password_hash($newpassword, PASSWORD_DEFAULT);
  $sql = "UPDATE users SET user_password = '$_SESSION[u_password]' WHERE user_id = '$_SESSION[u_id]'";
  mysqli_query($conn, $sql);
  header("Location: meetup_profile.php?changepassword=successful");
  exit();
}
else {
  header("Location: meetup_change.php?changepassword=wrongpassword");
  exit();
}
