<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ledthanhdat.vn/html/lynessa/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Mar 2023 03:25:11 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.scrollbar.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/megamenu.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/dreaming-attribute.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js">
    <!-- <script src="https://cdn.tailwindcss.com"></script> -->
    <title>Lynessa - HTML Template </title>
    <style>
        img > .a{
            width: 270px;
            height: 350px;
            object-fit: contain;
        }
    </style>
</head>


<body>
    <header id="header" class="header style-04 header-transparent header-sticky">
        <div class="header-middle">
            <div class="header-middle-inner">
                <div class="header-search-mid">
                    <div class="header-search">
                        <div class="block-search">
                            <form role="search" method="post" class="form-search block-search-form lynessa-live-search-form" action="?sp=shop">
                                <div class="form-content search-box results-search">
                                    <div class="inner">
                                        <input autocomplete="off" class="searchfield txt-livesearch input" name="kyw" value="" placeholder="Search here..." type="text">
                                    </div>
                                </div>
                                <input name="post_type" value="product" type="hidden">
                                <input name="taxonomy" value="product_cat" type="hidden">
                                <div class="category">
                                    <select title="product_cat" name="product_cat" id="1771262470" class="category-search-option" tabindex="-1" style="display: none;">
                                        <option value="0">All Categories</option>
                                        <option class="level-0" value="light">Just In</option>
                                        <option class="level-0" value="chair">Restock</option>
                                        <option class="level-0" value="table">Dresses</option>
                                        <option class="level-0" value="bed">Shirts</option>
                                        <option class="level-0" value="new-arrivals">New arrivals</option>
                                        <option class="level-0" value="lamp">Leggings</option>
                                        <option class="level-0" value="specials">Knit Tops</option>
                                        <option class="level-0" value="sofas">Bodysuits</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn-submit">
                                    <span class="pe-7s-search"></span>
                                </button>
                            </form><!-- block search -->
                        </div>
                    </div>
                </div>
                <div class="header-logo-menu">
                    <div class="block-menu-bar">
                        <a class="menu-bar menu-toggle" href="#">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>
                    <div class="header-logo">
                        <a href="index.php"><img alt="Lynessa" src="assets/images/logo.png" class="logo"></a>
                    </div>
                </div>
                <div class="header-control">
                    <div class="header-control-inner">
                        <div class="meta-dreaming">
                            <div class="menu-item block-user block-dreaming lynessa-dropdown">
                                <?php if (isset($_SESSION['user'])) {
                                    extract($_SESSION['user']);
                                    if ($role == 3) {
                                ?>
                                        <div class="menu-item block-user block-dreaming lynessa-dropdown">
                                            <a class="block-link" href="index.php?sp=account">
                                                <span class="pe-7s-user"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--customer-logout">
                                                    <a href="./admin">Admin</a>
                                                </li>
                                                <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--customer-logout">
                                                    <a href="?sp=account">Account</a>
                                                </li>
                                                <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--customer-logout">
                                                    <a href="?sp=logout">Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="menu-item block-user block-dreaming lynessa-dropdown">
                                            <a class="block-link" href="index.php?sp=account">
                                                <span class="pe-7s-user"></span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--customer-logout">
                                                    <a href="?sp=account">Account</a>
                                                </li>
                                                <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--customer-logout">
                                                    <a href="?sp=logout">Logout</a>
                                                </li>
                                            </ul>
                                        </div>

                                    <?php
                                    }
                                    ?>

                                <?php } else { ?>
                                    <div class="menu-item block-user block-dreaming lynessa-dropdown">
                                        <a class="block-link" href="index.php?sp=login_resign">
                                            <span class="pe-7s-user"></span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--customer-logout">

                                                <a href="?sp=login_resign">Login or Resign</a>

                                            </li>
                                        </ul>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="block-minicart block-dreaming lynessa-mini-cart lynessa-dropdown" id="demo" onclick="click()">
                                <div class="shopcart-dropdown block-cart-link"  data-lynessa="lynessa-dropdown" >
                                    <a class="block-link link-dropdown" href="" >
                                        <span class="pe-7s-shopbag"></span>
                                        <?php

                                        if (isset($_SESSION['mycart'])) {
                                            $stt = 0;
                                            foreach ($_SESSION['mycart'] as $cart) {
                                                $stt++;
                                        ?><span class="count"><?= $stt ?></span>


                                        <?php

                                            }
                                        }
                                        ?>

                                    </a>
                                </div>

                                <div class="widget lynessa widget_shopping_cart">
                                    <div class="widget_shopping_cart_content">


                                        <h3 class="minicart-title">Your Cart <?php
                                                                                if (isset($_SESSION['mycart'])) {
                                                                                    $stt = 0;
                                                                                    foreach ($_SESSION['mycart'] as $cart) {
                                                                                        $stt++;
                                                                                ?><span class="minicart-number-items"><?= $stt ?></span>
                                            <?php
                                                                                    }
                                                                                }
                                            ?>
                                        </h3>
                                        <ul class="lynessa-mini-cart cart_list product_list_widget">
                                            <?php
                                            if (isset($_SESSION['mycart'])) {
                                                $stt = 0;
                                                foreach ($_SESSION['mycart'] as $cart) {
                                            ?>
                                                    <li class="lynessa-mini-cart-item mini_cart_item">

                                                        <a href="?sp=delete_cart&idCart=<?= $stt++ ?>" class="remove remove_from_cart_button">×</a>
                                                        <a href="#">
                                                            <img src="./image/<?= $cart[2] ?>" class="attachment-lynessa_thumbnail size-lynessa_thumbnail" alt="img" width="600" height="778"><?= $cart[1] ?>;
                                                        </a>
                                                        <span class="quantity"><?= $cart[4] ?> × <span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span><?= $cart[3]*$cart[4] ?></span></span>
                                                    </li>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </ul>
                                        <p class="lynessa-mini-cart__total total"><strong>Subtotal:</strong>
                                            <?php
                                            $tong = 0;
                                            if (isset($_SESSION['mycart'])) {
                                            ;

                                                foreach ($_SESSION['mycart'] as $cart) {
                                                    $tong += $cart[3]*$cart[4] ;
                                                }
                                                echo '
                                                <span class="lynessa-Price-amount amount"><span
                                            class="lynessa-Price-currencySymbol">$</span>' . $tong . '</span>';
                                            }
                                            ?>
                                        </p>
                                        <p class="lynessa-mini-cart__buttons buttons">
                                            <a href="?sp=cart" class="button lynessa-forward">Viewcart</a>
                                            <a href="?sp=checkout" class="button checkout lynessa-forward">Checkout</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-wrap-stick">
            <div class="header-position">
                <div class="header-nav">
                    <div class="container">
                        <div class="lynessa-menu-wapper"></div>
                        <div class="header-nav-inner">
                            <div class="box-header-nav menu-nocenter">
                                <ul id="menu-primary-menu" class="clone-main-menu lynessa-clone-mobile-menu lynessa-nav main-menu">
                                    <li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-230 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="lynessa-menu-item-title" title="Home" href="?sp=home">Home</a>
                                        <!-- <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-home">
                                        <h5 class="az_custom_heading">
                                                        <a href="index.html">Home 01</a>
                                                    </h5>
                                    </div> -->
                                    </li>
                                    <li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="lynessa-menu-item-title" title="Shop" href="?sp=shop">Shop</a>

                                    </li>
                                    <li id="menu-item-229" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-229 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="lynessa-menu-item-title" title="Elements" href="#">Elements</a>
                                    </li>
                                    <li id="menu-item-996" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-996 parent parent-megamenu item-megamenu menu-item-has-children">
                                        <a class="lynessa-menu-item-title" title="Blog" href="blog.php">Blog</a>

                                    </li>
                                    <li id="menu-item-237" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-237 parent">
                                        <a class="lynessa-menu-item-title" title="Pages" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

