<?php
/* The session_start() function must be the very first thing in each of your documents document. Before any HTML tags.*/
session_start();
if ($_SESSION["sess_username"] == "admin") {
  include('views/header_admin.php');
} else {

  include('views/header_user.php');
}
?>
<!DOCTYPE html>

<html lang="en">
<title>Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="public/css/styles.css">
<script src="public/js/main.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    background-image: url("public/images/roasters.jpg");
  }
</style>

<body>
    <!-- Log in Form-->
  <div class="container">
    <form action="loginscript.php" method="post">
      <table class="form">
        <tr>
          <th class=label>Login</th>
        </tr>
        <!-- Username input box -->
        <tr>
          <td>
            <label class="firstLabel">Username:</label>
            <input type="text" name="username" id="username" value="" autocomplete="off" />
          </td>
        </tr>
        <!-- Password input box -->
        <tr>
          <td><label class="firstLabel">Password:</label>
            <input type="password" name="password" id="password" value="" autocomplete="off" />
          </td>
        </tr>
        <!-- Submit button -->
        <tr>
          <td>
            <input type="submit" name="submitBtnLogin" id="submitBtnLogin" value="Login" />
            <span class="loginMsg"><?php echo @$msg; ?></span>
          </td>
        </tr>
      </table>
  </div>
  </form>
</body>

  <!-- Footer -->
<?php
include "views/footer.php";
?>