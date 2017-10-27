<?php
session_start();
if (isset($_POST['submit']))
{
  include 'login_system.php';
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username) || empty($password))
  {
    header("Location: /meetup_login.php?login=empty");
    exit();
  }
  else {
    $sql = "SELECT * FROM users WHERE user_username='$username'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = Mysqli_num_rows($result);
    if($resultCheck < 1)
    {
      header("Location: /meetup_login.php?login=wrongusername");
      exit();
    }
    else {
      if($row = mysqli_fetch_assoc($result))
      {
        $hashedPwdCheck = password_verify($password, $row['user_password']);
        if($hashedPwdCheck == false)
        {
          header("Location: /meetup_login.php?login=wrongpassword");
          exit();
        }
        else if($hashedPwdCheck == true)
        {
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
          header("Location: meetup_profile.php?login=success");
          exit();
        }
      }
    }
  }
}
else {
  header("Location: /meetup_login.html");
  exit();
}
