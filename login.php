<!DOCTYPE html
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BCA Login</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
  </head>
  <body>
    <div class="login-box">
      <h1 id="login-title">Login</h1>
      <div class="login-table">
        <form action="login.php" method="post">
        <input type="text" class="login-text" name="username" placeholder="Enter Username"><br>
        <input type="text" class="login-text" name="password" placeholder="Enter Password">
        <button type="submit" name="login-submit">Submit</button>
        </form>
      </div>

    </div>
  </body>
</html>
<?php
include("dbconn.php");
$user = $_POST['username'];
$pass = $_POST['password'];
if(isset($_POST['login-submit'])) {
    if (empty($user) || empty($pass)) {
      echo "Empty";
    }
    $query = "SELECT * FROM user WHERE user='$user' AND pass='$pass'";
    $query_con = mysqli_query($connect, $query);
    $row = mysqli_fetch_array($query_con);

    if ($row) {
      header("location:welcome.php");
      echo "<h1>Successful</h1>";
    } else {
      echo "<h1>Unsuccessful</h1>";
    }
}
?>
