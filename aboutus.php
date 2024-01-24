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
<html>

<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/public/css/styles.css" />
  <script src="public/js/main.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <!-- Main page Content -->
  <main class="main">
    <h1>About Us </h1>

    <!-- Table -->
    <table class=table>
      <!-- Start Our Story Row -->
      <tr>
        <td>
          <h2>Our Story</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate ut pharetra sit amet. Purus in massa tempor nec feugiat nisl pretium fusce id. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc. Tortor dignissim convallis aenean et tortor at risus viverra adipiscing. Egestas quis ipsum suspendisse ultrices gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada. Varius duis at consectetur lorem donec massa sapien faucibus. Senectus et netus et malesuada.</p>
        </td>
        <td><img class=aboutImage src="/public/images/beans.jpg" alt="Field"></td>
      </tr>
      <!-- Start Our Goal Row -->
      <tr>
        <td><img class=aboutImage src="/public/images/beans.jpg" alt="Harvest"></td>
        <td>
          <h2>Our Goal</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate ut pharetra sit amet. Purus in massa tempor nec feugiat nisl pretium fusce id. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc. Tortor dignissim convallis aenean et tortor at risus viverra adipiscing. Egestas quis ipsum suspendisse ultrices gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada. Varius duis at consectetur lorem donec massa sapien faucibus. Senectus et netus et malesuada.</p>
        </td>
      </tr>
      <!-- Start Our Vision Row -->
      <tr>
        <td>
          <h2>Our Vision</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate ut pharetra sit amet. Purus in massa tempor nec feugiat nisl pretium fusce id. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc. Tortor dignissim convallis aenean et tortor at risus viverra adipiscing. Egestas quis ipsum suspendisse ultrices gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada. Varius duis at consectetur lorem donec massa sapien faucibus. Senectus et netus et malesuada.</p>
        </td>
        <td><img class=aboutImage src="/public/images/beans.jpg" alt="ShopFront"></td>
      </tr>
      <!-- Start Our Success Row -->
      <tr>
        <td><img class=aboutImage src="/public/images/beans.jpg" alt="Cuisine"></td>
        <td>
          <h2>Our Success</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Vulputate ut pharetra sit amet. Purus in massa tempor nec feugiat nisl pretium fusce id. Odio ut enim blandit volutpat maecenas volutpat blandit. Ultricies leo integer malesuada nunc. Tortor dignissim convallis aenean et tortor at risus viverra adipiscing. Egestas quis ipsum suspendisse ultrices gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada. Varius duis at consectetur lorem donec massa sapien faucibus. Senectus et netus et malesuada.</p>
        </td>
      </tr>
    </table>
  </main>
  <!-- Footer -->

</body>

</html>
<?php

include "views/footer.php";
?>