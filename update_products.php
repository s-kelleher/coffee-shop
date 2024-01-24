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
<title>Update</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" type="text/css" href="/public/css/styles.css">
<script src="public/js/main.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  body {
    background-color: white;
  }
</style>

<body>
  <!--Created using code of Lecturer-->
  <!--Products Table -->
  <h1> Products Table </h1>
  <table class="dataTable">
    <tr>
      <!-- Row Headers of Products Table -->
      <th>Product ID</th>
      <th>Product Name</th>
      <th>Product Price</th>
      <?php
      require 'database-connector.php';                       // call connection file
      $sql_statement = $db->prepare("SELECT * FROM products");   // Select Everything from the table
      $sql_statement->execute();                              // The result of the search are added to an array   
      $books = $sql_statement->fetchAll();

      
      foreach ($books as $row) {
        // note we are 'echoing' out HTML within embedded PHP
        echo '<tr>';
        echo '<td>' . $row["product_id"] . '</td>';
        echo '<td>' . $row["product_name"] . '</td>';
        echo '<td>' . $row["product_price"] . '</td>';
        // we are interpolating the row ID as part of a link - this will redirect to our PHP file, run operations, and resume this page

        echo '<td><a href="delete.php?product_id=' . $row['product_id'] . '">Delete</a></td>';
        echo '</tr>';
      }

      ?>
    </tr>
  </table>
  <!--Add Product Form -->
  <div class="container">
    <form method="post" action="update.php">
      <label class="formlabel">Update Products Table</label>
      <br>
      Product ID(Please select new ID):<br>
      <input type="number" name="product_id">
      <br>
      Product name:<br>
      <input type="text" name="product_name">
      <br>
      Product Price:<br>
      <input type="number" name="product_price">
      <br><br>
      <input type="submit" name="save" value="Update">
    </form>
  </div>

</body>
<?php
//Site Footer
include('views/footer.php');
?>