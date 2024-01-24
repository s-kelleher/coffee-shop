<?php
session_start();
include("database-connector.php"); //Call database file
?>
<?php
$product_id = $_POST['product_id']; // post product_id from form
$product_name = $_POST['product_name']; // post product_name from form
$product_price = $_POST['product_price']; // post product_price from form

$sql = "INSERT INTO products (product_id,product_name,product_price) 
    VALUES ('$product_id', '$product_name','$product_price')"; // Insert data into products table
$db->exec($sql);
echo "New record created successfully"; // Correct entry message

$db = null;

?>
<?php
header('location:update_products.php'); // Send back to update_products.php page
exit;
?>