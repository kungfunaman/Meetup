<!DOCTYPE html>
<html>
<head>
  <title>meetup.com/registeration.php</title>
  <link rel="stylesheet" href="stylesheet3.css">
</head>
<body>
  <p>
    <img src="Meetup_Logo_2015.png" height=100px width=148px class="image">
    <a href="meetup_home.php">Go Back</a></p>
    <div>
    <form action="registration.php" method="POST">
      FULL NAME:<input type="text" placeholder="Enter your Full Name" name="fullname" class="for"><br><br>
      GENDER:<br><input type="radio" name="gender" value="Male" class="for">Male<br>
             <input type="radio" name="gender" value="Female" class="for">Female<br><br>
      USERNAME:<input type="text" placeholder="Enter Username" name="username" class="for"><br><br>
      E-MAIL: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" placeholder="Enter E-mail ID" class="for"><br><br>
      PASSWORD:<input type="password" placeholder="Enter Password" name="password" class="for"><br><br>
      INTERESTS:<br><input type="checkbox" name="Music" value="Yes" class="for">Music<br>
      <input type="checkbox" name="Dancing" value="Yes" class="for">Dancing<br>
      <input type="checkbox" name="Reading" value="Yes" class="for">Reading<br>
      <input type="checkbox" name="Partying" value="Yes" class="for">Partying<br>
      <input type="checkbox" name="Sleeping" value="Yes" class="for">Sleeping<br>
      SECURITY QUESTION:<input type="text" placeholder="Enter Security question" name="question" class="for"><br><br>
      ANSWER:<input type="text" placeholder="Enter Answer" name="answer" class="for"><br><br>
      <button type="submit" name="submit" class="for">SUBMIT</button> &nbsp;
      <input type="reset" value="RESET" name="reset" class="for"> &nbsp;
      <input type="button" value="GO TO LOGIN PAGE" onclick="location.href='meetup_login.php';" class="for">
    </form>
  </div>
</body>
</html>
