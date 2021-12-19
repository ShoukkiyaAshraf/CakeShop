<?php
session_start();
// if (!empty($_SESSION['cart'])) {
//     $printCount = count($_SESSION['cart']);
// }
// else {
//     $printCount = 0;
// }
if (!empty($_SESSION['user_users_id']) && !empty($_SESSION['user_users_username'])) {
    $printUsername = $_SESSION['user_users_username'];
}
else {
    $printUsername = "None";
}
if(isset($_GET['orders_id'])){
        // echo "Orders Id - ".$_GET['orders_id'];
        $orders_id = $_GET['orders_id'];
        require_once('config.php');
        $select = "SELECT * FROM cake_shop_orders_detail where orders_id =  $orders_id";
        $query = mysqli_query($conn, $select);
        $i = 0;
        while ($res = mysqli_fetch_assoc($query)) {
                                    $printCount[$i]['product_name'] = $res['product_name'];
                                    $printCount[$i]['quantity'] = $res['quantity'];
                                    $printCount[$i]['price'] = $res['price'];
                                    $i++;
                                }
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

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        
        .shopping__cart__table table {
    margin-left: 15;
    margin-left: 34%;
    border-collapse: inherit;
}
.strangeNumbers {
  word-spacing: 0.5em;
}
p#final_result {
    position: relative;
    margin-top: 15%;
    z-index: 5;
    margin-right: -202px;
    /* margin-left: 109%; */
    font-size: 18px;
    color: #d56d1b;
    font-weight: 500;
    margin-left: auto;
    text-align: end;
    /* padding-left: 25px; */
    /* margin-right: auto; */
}
.shopping__cart__table table tbody tr td {
     padding-bottom: 0px !important; 
    padding-top: 22px !important;
}
.shopping__cart__table table {
    margin-left: 15 !important;
    margin-left: 110% !important;
    border-collapse: inherit !important;
    /* border: 0.01px solid white; */
}
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    
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
                                    <a href="cart.php"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Cart: <span>0</span></div>

                                    

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

        <!-- Hero Section Begin -->
    <section class="hero">
        <div class="hero__slider owl-carousel"> 
            <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
                <div class="container">
                    <!-- <div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">-->
                                <!--<h2>Making your life sweeter one bite at a time!</h2>
                                <a href="#" class="primary-btn">Our cakes</a>-->
                           <!-- </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="img/hero/hero-2.jpg">
                <div class="container">
                    <!--<div class="row d-flex justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero__text">
                                <h2>Making your life sweeter one bite at a time!</h2>
                                <a href="#" class="primary-btn">Our cakes</a>
                            </div>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
        <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <!-- <span>About Cake shop</span> -->
                            <h2>You Order has been placed. Thank you!!</h2>
                        </div>
                        <!-- <p>The Cake Shop that offers Wedding cakes,Custom cakes, and a small variety of bites sized treats. Everything is made from house</p> -->
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-md-6">
                    <div class="about__bar">
                        <div class="about__bar__item">
                            <p>Cake design</p>
                            <div id="bar1" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="95"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Taste</p>
                            <div id="bar2" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="99"></span>
                            </div>
                        </div>
                        <div class="about__bar__item">
                            <p>Cake Delivery</p>
                            <div id="bar3" class="barfiller">
                                <div class="tipWrap"><span class="tip"></span></div>
                                <span class="fill" data-percentage="90"></span>
                            </div>
                        </div>
                    </div>
                </div> -->
                                    <div class="shopping__cart__table">
                        <table>
                            <!-- <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead> -->
                            <tbody>
                                <form method="post" action="insert_orders.php">
                    <tbody>
                    <?php
                    if (count($printCount) == 0) {
                    ?>
                    <tr>
                    <td colspan="6" align="center"></td>
                    </tr>
                    <?php } else { ?>
                    <?php
                    $total_amount = 0; 
                    // $printCount[$i]['product_name'] = $res['product_name'];
                    // $printCount[$i]['quantity'] = $res['quantity'];
                    // $printCount[$i]['price'] = $res['price'];
                    for($i=0; $i<count($printCount); $i++){
                        $total_amount += $printCount[$i]['price'];
			
                    ?>
                    <tr>
                    
                    <td><?php echo $printCount[$i]['product_name'];?><input type="hidden" name="hidden_product_name[]" value="<?php echo $printCount[$i]['product_name'];?>">
                    </td>
<!-- 
                    <td><input class="form-control" type="number" min="1" max="9" step="1" value="1" name="product_quantity[]" onchange="prodTotal(this)"></td> -->
                   <!--  <td>&nbsp</td> -->
                    <td>-</td>
            <!--         <td>&nbsp</td> -->
                    <td style="margin-left: 5px !important;">
                        <span >Rs. <?php echo $printCount[$i]['price'] * 1;?></span>
                        <input type="hidden" name="hidden_product_total[]" value="<?php echo $printCount[$i]['price'];?>">
                    </td>
                    <td align="center"><a href="remove_product.php?val_i=<?php echo $i;?>"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>

                      <?php } echo '<p id="final_result">Total Amount - Rs.'.$total_amount.'</p>' ;} ?> 
                        
                            </tbody>
                        </table> 
                    </div>
            </div>
        </div>
    </section>
    
</body>
</html>