<?php
session_start();
if(isset($_POST['submit']))
{
  include_once 'login_system.php';
  $fullname = mysqli_real_escape_string($conn,$_POST['fullname']);
  $username = mysqli_real_escape_string($conn,$_POST['username']);
  $email = mysqli_real_escape_string($conn,$_POST['email']);
  $password = mysqli_real_escape_string($conn,$_POST['password']);
  $gender = mysqli_real_escape_string($conn,$_POST['gender']);
  $music;
  $dancing;
  $reading;
  $partying;
  $sleeping;
  $question = mysqli_real_escape_string($conn,$_POST['question']);
  $answer = mysqli_real_escape_string($conn,$_POST['answer']);

if(isset($_POST['Music']) && $_POST['Music'] == 'Yes')
{
  $music='1';
}
else {
  $music='0';
}
if(isset($_POST['Dancing']) && $_POST['Dancing'] == 'Yes')
{
  $dancing='1';
}
else {
  $dancing='0';
}
if(isset($_POST['Reading']) && $_POST['Reading'] == 'Yes')
{
  $reading='1';
}
else {
  $reading='0';
}
if(isset($_POST['Partying']) && $_POST['Partying'] == 'Yes')
{
  $partying='1';
}
else {
  $partying='0';
}
if(isset($_POST['Sleeping']) && $_POST['Sleeping'] == 'Yes')
{
  $sleeping='1';
}
else {
  $sleeping='0';
}
  if(empty($fullname) || empty($username) || empty($email) || empty($password) || empty($gender) || empty($question) || empty($answer))
  {
    header("Location: meetup_reg.php?registration=emptyinputfeilds");
    exit();
  }
  else
  {
    if (!preg_match("/^[a-zA-Z ]*$/",$fullname))
    {
      header("Location: meetup_reg.php?signup=invalid_fullname");
      exit();
    }
    else
    {
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
      {
        header("Location: meetup_reg.php");
        exit();
      }
      else {
          $sql = "SELECT * FROM users WHERE user_username='$username'";
          $result =mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck > 0)
          {
            header("Location: meetup_reg.php?signup=username_taken");
            exit();
          }
          else {
            $hashedpassword = password_hash($password, PASSWORD_DEFAULT);
            $sql="INSERT INTO users (user_name,user_username,user_email,user_password,user_music,user_dancing,user_reading,user_partying,user_sleeping,user_gender,user_question,user_answer) VALUES ('$fullname', '$username', '$email', '$hashedpassword', '$music', '$dancing', '$reading', '$partying', '$sleeping', '$gender', '$question', '$answer');";
            mysqli_query($conn, $sql);
            header("Location: meetup_login.php?signup=successful");
            exit();
          }
      }
    }
  }
}
else
{
  header("Location: meetup_reg.php");
  exit();
}
?>
