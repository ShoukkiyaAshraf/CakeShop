<?php
if (isset($_GET['remove_success']) && $_GET['remove_success'] == 1) {
    echo "<script>alert('Product removed!')</script>";
    echo "<script>window.location.assign('cart.php')</script>";
}
if (isset($_GET['order_success']) && $_GET['order_success'] == 1) {
    echo "<script>alert('Order placed!')</script>";
    if(isset($_GET['orders_id'])){
        echo "<script>window.location.assign('checkout.php?orders_id=".$_GET['orders_id']."')</script>";
    }
    echo "<script>window.location.assign('checkout.php')</script>";
}
session_start();
if (!empty($_SESSION['cart'])) {
    $printCount = count($_SESSION['cart']);
}
else {
    $printCount = 0;
}
if (!empty($_SESSION['user_users_id']) && !empty($_SESSION['user_users_username'])) {
    $printUsername = $_SESSION['user_users_username'];
}
else {
    $printUsername = "None";
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <style type="text/css">
        span.paid_price {
    margin-left: 25% !important;
}
p#total_amount {
    /* margin-top: -81% !important; */
    display: inline;
}
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Cart: <span>0.00</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                
                <li><a href="#">Sign in</a> <span class="arrow_carrot-down"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <ul>
                                    
                                    <?php
                                    // session_start();
                                    if (isset($_SESSION['user_users_id']) && $_SESSION['user_users_username'] !== null) {
                                        ?>
                                    <li><a href="logout_users.php">Logout</a> <span class= "ca" </span>
                                    </li>
                                    <?php
                                     }else{
                                    ?>
                                    <li><a href="register.php">SignUp</a> <span class= "ca"</span>
                                    </li>
                                    <li><a href="login_users.php">Login</a> <span class= "ca" </span>
                                    </li>
                                <?php }?>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                
                                <div class="header__top__right__cart">
                                    <a href="cart.php"><img src="img/icon/cart.png" alt=""> <span><?php echo $printCount;?></span></a>
                                    <div class="cart__price">Cart: <span><?php echo $printCount;?></span></div>

                                    

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="about.php">About US</a></li>
                    

                            <li><a href="#">Products</a>
                                <ul class="dropdown">
                                
                                    <?php
                            require_once('config.php');
                            $select = "SELECT * FROM cake_shop_category";
                            $query = mysqli_query($conn, $select);
                            while ($res = mysqli_fetch_assoc($query)) {
                            ?>
                                <a class="dropdown-item" href="shop.php?category=<?php echo $res['category_id'];?>">
                                    <?php echo $res['category_name'];?>
                                </a>
                            <?php
                            }
                            ?>
                                </ul>
                            </li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__text">
                        <h2>Shopping cart</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="breadcrumb__links">
                        <a href="./index.html">Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="shopping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Qty</th>
                                    <th>Total price</th>
				    
                                </tr>
                            </thead>
                            <tbody>
                                <form method="post" action="insert_orders.php">
                    <tbody>
                    <?php
                    if ($printCount == 0) {
                    ?>
                    <tr>
                    <td colspan="6" align="center">Your cart is empty!</td>
                    </tr>
                    <?php } else { ?>
                    <?php
                                            $total_amount = 0;
                    require_once('config.php');
                    for ($i=0; $i < count($_SESSION['cart']); $i++) {
                    $select = "SELECT * FROM cake_shop_product where product_id = {$_SESSION['cart'][$i]}";
                    $query = mysqli_query($conn, $select);
                    $j = $i;
                    while ($res = mysqli_fetch_assoc($query)) {
                                                $total_amount = $total_amount + $res['product_price'];
                    ?>
                    <tr>
                    <td><?php echo ++$j;?></td>
                    <td><?php echo $res['product_name'];?><input type="hidden" name="hidden_product_name[]" value="<?php echo $res['product_name'];?>"></td>
                    <td>Rs. <?php echo $res['product_price'];?><input type="hidden" name="hidden_product_price[]" value="<?php echo $res['product_price'];?>"></td>
                    <td><input id="<?php echo 'count_'.$j?>"class="form-control" type="number" min="1" max="9" step="1" value="1" name="product_quantity[]" onchange="prodTotal(<?php echo $res['product_price'];?>,<?php echo $j;?>)"></td>
                    <td><?php echo "<span class='paid_price' id='action_val".$j."'>";?> <?php echo $res['product_price'] * 1;?></span><input id="<?php echo 'action_input_val'.$j;?>" type="hidden" name="hidden_product_total[]" value="<?php echo $res['product_price'];?>"></td>
                    <td align="center"><a href="remove_product.php?val_i=<?php echo $i;?>"><i class="fas fa-trash-alt"></i></a></td>
		     <td align="center"><a href="remove_product.php?val_i=<?php echo $i;?>"><span class="text-danger">Remove</span></a></td>
                    </tr>

                       <?php } ?>
                       <?php } echo '<input style="display:none;" type="text" value="'.$j.'" id="row_count" />';?>
                       <?php } ?>

                        
                                            <tr>
                                                <td colspan="1">
                                                    Delivery Date:<input class="form-control" type="date" name="delivery_date" required="">
                                                </td>
					    </tr>
                                                   

                       
                        
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="continue__btn">
                                <a href="shop.php">Continue Shopping</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                    <div class="cart__total">
                        <h6>Cart total</h6>
                        <ul>
                            <li>Total<span>Rs. <?php if ($printCount == 0){echo 0;} else {echo '<p id="total_amount" >'.$total_amount.'</p>';}?></span><input type="hidden" name="hidden_total_amount" value="<?php echo $total_amount;?>"></span></li>
                            
                        </ul>
                        <!-- <a href="checkout.php" class="primary-btn">Proceed to checkout</a> -->
                        <input type="submit" name="submit" class="primary-btn" value="Proceed to checkout">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->

    

  <!-- Footer Section Begin -->
    <footer class="footer set-bg" data-setbg="img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>WORKING HOURS</h6>
                        <ul>
                            <li>Delivery time 08:00 am – 09:30 pm</li>
                            <li>Order atleast 4 Hour before</li>
                            <li>Free Delivery Around 10KM</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/footer-logo.png" alt=""></a>
                        </div>
                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <p class="copyright__text text-white">
                      </p>
                  </div>
                  <div class="col-lg-5">
                    <div class="copyright__widget">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.nicescroll.min.js"></script>
<script src="js/main.js"></script>
</body>
<script type="text/javascript">
    function prodTotal(price,row){
        var input_id;
        var changed_price;
        var quantity;
        var row_count;
        var total_amount;
        input_id = 'action_val'+row;
        quantity = $('#count_'+row).val();
        changed_price = price * quantity;
        $('#'+input_id).html('Rs. '+changed_price);
        $('#action_input_val'+row).val(changed_price);
        row_count = $('#row_count').val();
        total_amount = 0;
        console.log(row_count);
        for(i=1; i<=row_count; i++){
            total_amount += parseInt($('#action_input_val'+i).val());
        }
        $('#total_amount').html(total_amount);
    }
</script>
</html>