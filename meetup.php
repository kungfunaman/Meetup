<?php
include_once 'login_system.php';
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if(Mysqli_num_rows($result) <1)
{
   echo "<li>No users match your interests</li>";
  exit();
}
else {
  while($row = mysqli_fetch_assoc($result))
  if((($row['user_music'] == $_SESSION['u_music'] && $_SESSION['u_music'] == '1') || ($row['user_dancing'] == $_SESSION['u_dancing'] && $_SESSION['u_dancing'] == '1')
  || ($row['user_reading'] == $_SESSION['u_reading'] && $_SESSION['u_reading'] == '1') || ($row['user_partying'] == $_SESSION['u_partying'] && $_SESSION['u_partying'] == '1')
  || ($row['user_sleeping'] == $_SESSION['u_sleeping'] && $_SESSION['u_sleeping'] == '1')) && $row['user_username'] != $_SESSION['u_username'])
  {
    echo "<li>" . $row['user_username'] . "</li><br>";
  }
}
