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

<body>
    <div class="product-collection">
        <div class="product-container">
            <div class="product-collection-wrapper">
                <a href="shop.php">
                <!-- Homepage col left -->
                    <div class="product-col-left flex">
                        <div class="product-col-content">
                            <h2 class="sm-title">Shop Equipment </h2>
                            <br>
                            <button type="button" class="btn-dark">Shop now</button>
                        </div>
                    </div>
                </a>

                <!-- Homepage col right -->
                
                <div class="product-col-right">
                    <div class="product-col-r-top flex">
                        <a href="shop.php">
                            <div class="product-col-content">
                                <h2 class="sm-title">Shop Beans </h2>
                                <br>
                                <button type="button" class="btn-dark">Shop now</button>
                            </div>
                        </a>
                    </div>
                    
                    <div class="product-col-r-bottom">
                        <!-- left -->
                        
                        <div class="flex">
                            <a href="roasters.php">
                                <div class="product-col-content">
                                    <h2 class="sm-title">Our Roasters</h2>
                                    <br>
                                    <button type="button" class="btn-dark">Discover</button>
                                </div>
                            </a>
                        </div>
                        <!-- right -->
                        <div class="flex">
                            <a href="about.php">
                                <div class="product-col-content">
                                    <h2 class="sm-title">About Us </h2>
                                    <br>
                                    <button type="button" class="btn-dark">Discover</button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

  <!-- Footer -->
<?php
include('views/footer.php');
?>