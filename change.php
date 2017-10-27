<?php
session_start();
include_once 'login_system.php';
$music;
$dancing;
$reading;
$partying;
$sleeping;

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


$sql="UPDATE users SET user_music = '$music', user_dancing = '$dancing', user_reading = '$reading', user_partying = '$partying', user_sleeping = '$sleeping' WHERE user_id = '$_SESSION[u_id]'";
mysqli_query($conn, $sql);
$_SESSION['u_music'] = $music;
$_SESSION['u_dancing'] = $dancing;
$_SESSION['u_reading'] = $reading;
$_SESSION['u_partying'] = $partying;
$_SESSION['u_sleeping'] = $sleeping;
header("Location: meetup_profile.php?change=successful");
exit();
