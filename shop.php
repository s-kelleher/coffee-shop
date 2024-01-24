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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="/public/css/styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <!-- Products card adapted using https://www.youtube.com/watch?v=ZI41tLLxNak -->
    <div class="products">
        <div class="product-container">
            <h1>Shop</h1>
            <br>
            <p class="text-light">Selection of some of the best irish coffee and niche coffe products</p>
            <br>
            <div class="product-items">
                <!-- 1 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img class="img-style" src="/public/images/coffeebean.png" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Badger and Dodo | 250g Bag</a>
                        <p class="product-price">€ 12.00</p>
                    </div>
                </div>
                <!-- End of  product -->
                <!-- 2 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img class="img-style" src="/public/images/coffeebean.png" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Soma Coffee | 250g Bag</a>
                        <p class="product-price">€ 13.00</p>
                    </div>
                </div>
                <!-- End of  product -->
                <!-- 3 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img class="img-style" src="/public/images/coffeebean.png" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Full Circle | 250g Bag</a>
                        <p class="product-price">€ 13.00</p>
                    </div>
                </div>
                <!-- End of  product -->
                <!-- 4 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img class="img-style" src="/public/images/coffeebean.png" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Bell Lane | 250g Bag</a>
                        <p class="product-price">€ 13.00</p>
                    </div>
                </div>
                <!-- End of  product -->
                <!-- 5 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img class="img-style" src="/public/images/coffeebean.png" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Carrow Coffee | 250g Bag</a>
                        <p class="product-price">€ 13.00</p>
                    </div>
                </div>
                <!-- End of  product -->
                <!-- 6 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img class="img-style" src="/public/images/coffeebean.png" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Full Circle | 250g Bag</a>
                        <p class="product-price">€ 13.00</p>
                    </div>
                </div>
                <!-- End of  product -->
                <!-- 7 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img class="img-style" src="/public/images/coffeebean.png" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Calendar Coffee | 250g Bag</a>
                        <p class="product-price">€ 13.00</p>
                    </div>
                </div>
                <!-- End of  product -->
                <!-- 8 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img class="img-style" src="/public/images/coffeebean.png" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Bell Lane | 250g Bag</a>
                        <p class="product-price">€ 13.00</p>
                    </div>
                </div>
                <!-- End of  product -->
                <!-- 9 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <!-- image https://www.roastedbrown.com/shop-->
                            <img class="img-style" src="/public/images/aeropress.jpg" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Aeropress</a>
                        <p class="product-price">€ 52.00</p>
                    </div>
                </div>
                <!-- End of  product -->
                <!-- 10 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <!-- image https://www.roastedbrown.com/shop-->
                            <img class="img-style" src="/public/images/rhinoware.jpg" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Rhinoware Hand Grinder</a>
                        <p class="product-price">€ 13.00</p>
                    </div>
                </div>
                <!-- End of  product -->
                <!-- 11 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img class="img-style" src="/public/images/kettle.jpg" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Kalita Wave Pouring Kettle</a>
                        <p class="product-price">€ 63.00</p>
                    </div>
                </div>
                <!-- End of  product -->
                <!-- 11 Product -->
                <div class="product">
                    <div class="product-content">
                        <div class="product-img">
                            <img class="img-style" src="/public/images/disks.jpg" alt="productimage">
                        </div>
                        <div class="product-btns">
                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"
                                style="background-color: black;border-color : white;"> Buy Now
                            </button>
                        </div>
                    </div>
                    <div class="product-info">
                        <a href="#" class="product-name">Aeropress Disk</a>
                        <p class="product-price">€ 24.00</p>
                    </div>
                </div>
                <!-- End of  product -->
            </div>
        </div>
    </div> <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thank you!</h4>
                </div>
                <div class="modal-body">
                    <p>Thank you for shopping at Cofix!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

</body>
<!-- Footer -->
<?php
include('views/footer.php');
?>