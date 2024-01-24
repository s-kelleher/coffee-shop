<?php
session_start();
include("database-connector.php");
?>
<?php
/*Sql to delete a record*/
$sql = "DELETE FROM products WHERE product_id='" . $_GET["product_id"] . "'"; //Delete row with that product_id from products table

$db->exec($sql);
echo "Record deleted successfully"; //Correct entry message
$db = null;
?>
<?php
header('location:update_products.php'); //Send back to update_products.php
exit;
?>