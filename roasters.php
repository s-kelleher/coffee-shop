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
  <title>Roasters</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="/public/css/styles.css" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  <!-- Main Page Content -->
  <main class="main">
    <!-- Heading 1 -->
    <h1>
      Meet Our Roasters...
    </h1>

    <!-- Roasters Grid -->
    <div class="flexContainer">
      <!-- Card #1 -->
      <a href="https://badgeranddodo.ie/">
        <div class="card" style="background-image: url('/public/images/badger_and_dodo.jpg');">
          <h3>Badger and Dodo</h3>
          <p>
            <i class="material-icons">place</i>
            Cork
          </p>
          <button class="btn">Discover</button>
        </div>
      </a>
      <!-- Card #2 -->
      <a href="https://somacoffeecompany.ie/">
        <div class="card" style="background-image: url('/public/images/soma_coffee.jpg');">
          <h3>Soma Coffee</h3>
          <p>
            <i class="material-icons">place</i>
            Cork
          </p>
          <button class="btn">Discover</button>

        </div>
      </a>
      <!-- Card #3 -->
      <a href="https://fullcircleroasters.ie/">
        <div class="card" style="background-image: url('/public/images/full_circle.jpg');">
          <h3>Full Circle Coffee</h3>
          <p>
            <i class="material-icons">place</i>
            Dublin
          </p>
          <button class="btn">Discover</button>
        </div>
      </a>
      <!-- Card #4 -->
      <a href="https://www.roastedbrown.com/">
        <div class="card" style="background-image: url('/public/images/roasted_brown.jpg');">
          <h3>Roasted Brown</h3>
          <p>
            <i class="material-icons">place</i>
            Wicklow
          </p>
          <button class="btn">Discover</button>
        </div>
      </a>

      <!-- Card #5 -->
      <a href="https://carrow.ie/">
        <div class="card" style="background-image: url('/public/images/carrow_coffee.jpeg');">
          <h3>Carrow Coffee </h3>
          <p>
            <i class="material-icons">place</i>
            Dublin
          </p>
          <button class="btn">Discover</button>
        </div>
      </a>
      <!-- Card xxx #6 -->
      <a href="https://fullcircleroasters.ie">
        <div class="card" style="background-image: url('/public/images/full_circle.jpg');">
          <h3>Full Circle</h3>
          <p>
            <i class="material-icons">place</i>
            Dublin
          </p>
          <button class="btn">Discover</button>
        </div>
      </a>
      <!-- Card #7 -->
      <a href="https://calendarcoffee.ie/">
        <div class="card" style="background-image: url('/public/images/calendar_coffee.jpg');">
          <h3>Calender Coffee</h3>
          <p>
            <i class="material-icons">place</i>
            Galway
          </p>
          <button class="btn">Discover</button>
        </div>
      </a>
      <!-- Card #8 -->
      <a href="https://www.belllane.ie/">
        <div class="card" style="background-image: url('/public/images/roasted_brown.jpg');">
          <h3>Bell Lane</h3>
          <p>
            <i class="material-icons">place</i>
            Westmeath
          </p>
          <button class="btn">Discover</button>
        </div>
      </a>
    </div>
  </main>


</body>
<!-- Footer -->
<?php
include('views/footer.php');
?>