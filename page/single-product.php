 <body class="single single-product">
     <header id="header" class="header style-04  header-sticky">
         <div class="header-middle">
             <div class="header-middle-inner">
                 <div class="header-search-mid">
                     <div class="header-search">
                         <div class="block-search">
                             <form role="search" method="get" class="form-search block-search-form lynessa-live-search-form">
                                 <div class="form-content search-box results-search">
                                     <div class="inner">
                                         <input autocomplete="off" class="searchfield txt-livesearch input" name="s" value="" placeholder="Search here..." type="text">
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
                                 <a class="block-link" href="my-account.php">
                                     <span class="pe-7s-user"></span>
                                 </a>
                                 <ul class="sub-menu">
                                     <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--dashboard is-active">
                                         <a href="#">Dashboard</a>
                                     </li>
                                     <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--orders">
                                         <a href="#">Orders</a>
                                     </li>
                                     <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--downloads">
                                         <a href="#">Downloads</a>
                                     </li>
                                     <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--edit-address">
                                         <a href="#">Addresses</a>
                                     </li>
                                     <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--edit-account">
                                         <a href="#">Account details</a>
                                     </li>
                                     <li class="menu-item lynessa-MyAccount-navigation-link lynessa-MyAccount-navigation-link--customer-logout">
                                         <a href="#">Logout</a>
                                     </li>
                                 </ul>
                             </div>
                             <div class="block-minicart block-dreaming lynessa-mini-cart lynessa-dropdown">
                                 <div class="shopcart-dropdown block-cart-link" data-lynessa="lynessa-dropdown">
                                     <a class="block-link link-dropdown" href="cart.php">
                                         <span class="pe-7s-shopbag"></span>
                                       <?php
                                            if (isset($_SESSION['mycart'])) {
                                                $stt = 0;
                                                foreach ($_SESSION['mycart'] as $cart) {
                                                   
                                                ?>  <span class="count"> <?=$stt++?></span>
                                         
                                                
                                                <?php 

                                                        }
                                                    }
                                                ?>
                                     </a>
                                 </div>
                                 <div class="widget lynessa widget_shopping_cart">
                                     <div class="widget_shopping_cart_content">
                                         <h3 class="minicart-title">Your Cart<span class="minicart-number-items">3</span>
                                         </h3>
                                         <ul class="lynessa-mini-cart cart_list product_list_widget">
                                             <li class="lynessa-mini-cart-item mini_cart_item">
                                                 <a href="#" class="remove remove_from_cart_button">×</a>
                                                 <a href="#">
                                                     <img src="assets/images/apro134-1-600x778.jpg" class="attachment-lynessa_thumbnail size-lynessa_thumbnail" alt="img" width="600" height="778">T-shirt with skirt –
                                                     Pink&nbsp;
                                                 </a>
                                                 <span class="quantity">1 × <span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>150.00</span></span>
                                             </li>
                                             <li class="lynessa-mini-cart-item mini_cart_item">
                                                 <a href="#" class="remove remove_from_cart_button">×</a>
                                                 <a href="#">
                                                     <img src="assets/images/apro1113-600x778.jpg" class="attachment-lynessa_thumbnail size-lynessa_thumbnail" alt="img" width="600" height="778">Abstract Sweatshirt&nbsp;
                                                 </a>
                                                 <span class="quantity">1 × <span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>129.00</span></span>
                                             </li>
                                             <li class="lynessa-mini-cart-item mini_cart_item">
                                                 <a href="#" class="remove remove_from_cart_button">×</a>
                                                 <a href="#">
                                                     <img src="assets/images/apro201-1-600x778.jpg" class="attachment-lynessa_thumbnail size-lynessa_thumbnail" alt="img" width="600" height="778">ELOISE SHIRRED&nbsp;
                                                 </a>
                                                 <span class="quantity">1 × <span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>139.00</span></span>
                                             </li>
                                         </ul>
                                         <p class="lynessa-mini-cart__total total"><strong>Subtotal:</strong>
                                             <span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>418.00</span>
                                         </p>
                                         <p class="lynessa-mini-cart__buttons buttons">
                                             <a href="cart.php" class="button lynessa-forward">Viewcart</a>
                                             <a href="checkout.php" class="button checkout lynessa-forward">Checkout</a>
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
                                         <a class="lynessa-menu-item-title" title="Home" href="index.php">Home</a>
                                         <!-- <span class="toggle-submenu"></span>
                                    <div class="submenu megamenu megamenu-home">
                                        <h5 class="az_custom_heading">
                                                        <a href="index.php">Home 01</a>
                                                    </h5>
                                    </div> -->
                                     </li>
                                     <li id="menu-item-228" class="menu-item menu-item-type-post_type menu-item-object-megamenu menu-item-228 parent parent-megamenu item-megamenu menu-item-has-children">
                                         <a class="lynessa-menu-item-title" title="Shop" href="shop-leftsidebar.php">Shop</a>

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
     <div class="banner-wrapper no_background">
         <div class="banner-wrapper-inner">
             <nav class="lynessa-breadcrumb"><a href="index.php">Home</a><i class="fa fa-angle-right"></i><a href="#">Shop</a>
                 <i class="fa fa-angle-right"></i>Single Product
             </nav>
         </div>
     </div>
     <div class="single-thumb-vertical main-container shop-page no-sidebar mt-5 pt-5">
         <div class="container">
             <div class="row">
                 <div class="main-content col-md-12">
                     <div class="lynessa-notices-wrapper"></div>
                     <div id="product-27" class="post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-variable has-default-attributes">
                         <div class="main-contain-summary">
                             <div class="contain-left has-gallery" style="margin-top:100px">
                                 <div class="single-left">
                                     <div class="lynessa-product-gallery lynessa-product-gallery--with-images lynessa-product-gallery--columns-4 images">
                                         <a href="#" class="lynessa-product-gallery__trigger">
                                             <img draggable="false" class="emoji" alt="🔍" src="image/<?=$sp['image']?>"></a>
                                         <div class="flex-viewport">
                                             <figure class="lynessa-product-gallery__wrapper">

                                                 <div class="lynessa-product-gallery__image">
                                                     <img src="image/<?= $sp['image'] ?>" alt="img">
                                                 </div>

                                             </figure>
                                         </div>
                                         <!-- <ol class="flex-control-nav flex-control-thumbs">
                                                 <li><img src="assets/images/apro131-2-100x100.jpg" alt="img">
                                                 </li>
                                                 <li><img src="assets/images/apro134-1-100x100.jpg" alt="img">
                                                 </li>
                                                 <li><img src="assets/images/apro132-1-100x100.jpg" alt="img">
                                                 </li>
                                                 <li><img src="assets/images/apro133-1-100x100.jpg" alt="img">
                                                 </li>
                                             </ol> -->
                                     </div>
                                 </div>
                                 <div class="summary entry-summary">
                                     <div class="flash">
                                         <span class="onnew"><span class="text">New</span></span>
                                     </div>
                                     <h1 class="product_title entry-title"><?= $sp['namePro'] ?></h1>
                                     <p class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span><?= $sp['price'] ?> </span></p>
                                     <p class="stock in-stock">
                                         Availability: <span> In stock</span>
                                     </p>
                                     <div class="lynessa-product-details__short-description">
                                         <p><?= $sp['description'] ?></p>
                                     </div>
                                     <form action="?sp=addtocart" method="post" enctype="multipart/form-data" class="variations_form cart">
                                         <table class="variations">
                                             <tbody>
                                                 <tr>
                                                     <td class="label"><label>Color</label></td>
                                                     <td class="value">
                                                         <select title="box_style" data-attributetype="box_style" data-id="pa_color" class="attribute-select " name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">
                                                             <option data-type="" data-pa_color="" value="">Choose an option
                                                             </option>
                                                             <option data-width="30" data-height="30" data-type="color" data-pa_color="#3155e2" value="blue" class="attached enabled">Blue
                                                             </option>
                                                             <option data-width="30" data-height="30" data-type="color" data-pa_color="#ffe59e" value="pink" class="attached enabled">Pink
                                                             </option>
                                                             <option data-width="30" data-height="30" data-type="color" data-pa_color="#b6b8ba" value="red" class="attached enabled">Red
                                                             </option>
                                                             <option data-width="30" data-height="30" data-type="color" data-pa_color="#e8e120" value="yellow" class="attached enabled">Yellow
                                                             </option>
                                                         </select>
                                                         <div class="data-val attribute-pa_color" data-attributetype="box_style">
                                                             <label>
                                                                 <input type="radio" name="color">
                                                                 <span class="change-value color" style="background: #3155e2;" data-value="blue">
                                                                 </span>
                                                             </label>
                                                             <label>
                                                                 <input type="radio" name="color">
                                                                 <span class="change-value color" style="background: #52b745;" data-value="green">
                                                                 </span>
                                                             </label>
                                                             <label>
                                                                 <input type="radio" name="color">
                                                                 <span class="change-value color" style="background: #ffe59e;" data-value="pink">
                                                                 </span>
                                                             </label>
                                                         </div>
                                                         <a class="reset_variations" href="#" style="visibility: hidden;">Clear</a>
                                                     </td>
                                                 </tr>
                                             </tbody>
                                         </table>
                                         <div class="single_variation_wrap">
                                             <div class="lynessa-variation single_variation"></div>
                                             <div class="lynessa-variation-add-to-cart variations_button ">
                                                 <div class="quantity">
                                                     <span class="qty-label">Quantiy:</span>
                                                     <div class="control">
                                                         <a class="btn-number qtyminus quantity-minus" href="#">-</a>
                                                         <input type="number"  data-step="1" min="1" max="<?=$sp['quantity']?>" name="quantity" value="1" title="Qty" class="input-qty input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                                                         <a class="btn-number qtyplus quantity-plus" href="#">+</a>
                                                     </div>
                                                 </div>
                                                 
                                                 <input name="img" value="<?=$sp['image']?>" type="hidden">
                                                 <input name="quan" value="<?=$sp['quantity']?>" type="hidden">
                                                 <input name="name" value="<?=$sp['namePro']?>" type="hidden">
                                                 <input name="price" value="<?=$sp['price']?>" type="hidden">
                                                 <input name="id" value="<?=$sp['idProduct']?>" type="hidden">
                                                 <?php if($sp['quantity']>0){?>
                                                    <button type="submit" name="addcart" class="single_add_to_cart_button button alt lynessa-variation-selection-needed">
                                                     Add to cart
                                                 </button>
                                                    
                                                    <?php }else{?>
                                                        <button type="submit" name="addcart" disabled class="single_add_to_cart_button button alt lynessa-variation-selection-needed">
                                                     Hết hàng
                                                 </button>
                                                        <?php }?>
                                                 
                                             </div>
                                         </div>
                                     </form>
                                     <div class="yith-wcwl-add-to-wishlist">
                                         <div class="yith-wcwl-add-button show">
                                             <a href="#" rel="nofollow" data-product-id="27" data-product-type="variable" class="add_to_wishlist">
                                                 Add to Wishlist</a>
                                         </div>
                                     </div>
                                     <div class="clear"></div>
                                     <a href="#" class="compare button" data-product_id="27" rel="nofollow">Compare</a>
                                     <div class="product_meta">
                                         <div class="wcml-dropdown product wcml_currency_switcher">
                                             <ul>
                                                 <li class="wcml-cs-active-currency">
                                                     <a class="wcml-cs-item-toggle">USD</a>
                                                     <ul class="wcml-cs-submenu">
                                                         <li>
                                                             <a>EUR</a>
                                                         </li>
                                                     </ul>
                                                 </li>
                                             </ul>
                                         </div>
                                         <!-- <span class="sku_wrapper">SKU: <span class="sku">885B712</span></span>
                                             <span class="posted_in">Categories: <a href="#" rel="tag">Dresses</a>, <a href="#" rel="tag">New arrivals</a>, <a href="#" rel="tag">Leggings</a></span>
                                             <span class="tagged_as">Tags: <a href="#" rel="tag">Dresses</a>, <a href="#" rel="tag">Sock</a></span> -->
                                     </div>
                                     <div class="lynessa-share-socials">
                                         <h5 class="social-heading">Share: </h5>
                                         <a target="_blank" class="facebook" href="#">
                                             <i class="fa fa-facebook-f"></i>
                                         </a>
                                         <a target="_blank" class="twitter" href="#"><i class="fa fa-twitter"></i>
                                         </a>
                                         <a target="_blank" class="pinterest" href="#"> <i class="fa fa-pinterest"></i>
                                         </a>
                                         <a target="_blank" class="googleplus" href="#"><i class="fa fa-google-plus"></i>
                                         </a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                         <div class="lynessa-tabs lynessa-tabs-wrapper">
                             <ul class="tabs dreaming-tabs" role="tablist">
                                 <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                                     <a href="#tab-description">Description</a>
                                 </li>
                                 <li class="additional_information_tab" id="tab-title-additional_information" role="tab" aria-controls="tab-additional_information">
                                     <a href="#tab-additional_information">Additional information</a>
                                 </li>
                                 <li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
                                     <a href="#tab-reviews">Reviews (0)</a>
                                 </li>
                             </ul>
                             <div class="lynessa-Tabs-panel lynessa-Tabs-panel--description panel entry-content lynessa-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">
                                 <h2>Description</h2>
                                 <div class="container-table">
                                     <div class="container-cell">
                                         <h2 class="az_custom_heading">Platea viverra aenean<br>dictumst</h2>
                                         <p>Lorem ipsum dolor sit amet consectetur adipiscing elit
                                             scelerisque integer, quam dapibus per risus donec semper
                                             vulputate interdum, imperdiet mus rhoncus commodo ultricies
                                             class urna tincidunt. Imperdiet vitae lacus etiam metus ut nisl
                                             curae, conubia enim scelerisque quis facilisis torquent,
                                             ultricies orci faucibus dictumst mauris curabitur. Massa risus
                                             nec sociosqu fames montes accumsan iaculis justo turpis
                                             luctus</p>
                                     </div>
                                     <div class="container-cell">
                                         <div class="az_single_image-wrapper az_box_border_grey">
                                             <img src="assets/images/single-pro1.jpg" class="az_single_image-img attachment-full" alt="img">
                                         </div>
                                     </div>
                                 </div>
                                 <div class="container-table">
                                     <div class="container-cell">
                                         <div class="az_single_image-wrapper az_box_border_grey">
                                             <img src="assets/images/single-pro2.jpg" class="az_single_image-img attachment-full" alt="img">
                                         </div>
                                     </div>
                                     <div class="container-cell">
                                         <h2 class="az_custom_heading">
                                             Potenti praesent molestie<br>
                                             at viverra</h2>
                                         <p>This generator uses a dictionary of Latin words to construct
                                             passages of Lorem Ipsum text that meet your desired length. The
                                             sentence and paragraph durations and punctuation dispersal are
                                             calculated using Gaussian distribution, based on statistical
                                             analysis of real world texts. This ensures that the generated
                                             Lorem Ipsum text is unique, free of repetition and also
                                             resembles readable text as much as possible.</p>
                                     </div>
                                 </div>
                             </div>
                             <div class="lynessa-Tabs-panel lynessa-Tabs-panel--additional_information panel entry-content lynessa-tab" id="tab-reviews">
                            
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
                                            <script>
                                                $(document).ready(function() {
                                                    $("#comment").load("page/binhluan/formbinhluan.php", {
                                                        idpro: <?=$sp['idProduct']?>,
                                                    });
                                                });
                                            </script>
                                            <div class="comment" id="comment">

                                            </div> 

                            </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-12 col-sm-12 dreaming_related-product">
                     <div class="block-title">
                         <h2 class="product-grid-title">
                             Related Products
                             <span></span>
                         </h2>
                     </div>
                     <div class="owl-slick owl-products equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                         <div class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
                             <div class="product-inner tooltip-left">
                                 <div class="product-thumb">
                                     <a class="thumb-link" href="#" tabindex="0">
                                         <img class="img-responsive" src="assets/images/apro101-1-600x778.jpg" alt="STRIPE SKIRTS" width="600" height="778">
                                     </a>
                                     <div class="flash"><span class="onnew"><span class="text">New</span></span></div>
                                     <div class="group-button">
                                         <div class="yith-wcwl-add-to-wishlist">
                                             <div class="yith-wcwl-add-button show">
                                                 <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                             </div>
                                         </div>
                                         <div class="lynessa product compare-button">
                                             <a href="#" class="compare button">Compare</a>
                                         </div>
                                         <a href="#" class="button yith-wcqv-button">Quick View</a>
                                         <div class="add-to-cart">
                                             <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                                 cart</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="product-info equal-elem">
                                     <h3 class="product-name product_title">
                                         <a href="#" tabindex="0">STRIPE SKIRTS</a>
                                     </h3>
                                     <div class="rating-wapper nostar">
                                         <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                         <span class="review">(0)</span>
                                     </div>
                                     <span class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span><?= $sp['price'] ?></span></span>
                                 </div>
                             </div>
                         </div>
                         <div class="product-item style-01 post-30 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-specials product_tag-light product_tag-table product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple  ">
                             <div class="product-inner tooltip-left">
                                 <div class="product-thumb">
                                     <a class="thumb-link" href="#" tabindex="0">
                                         <img class="img-responsive" src="assets/images/apro41-1-600x778.jpg" alt="MARIE CAMI" width="600" height="778">
                                     </a>
                                     <div class="flash">
                                         <span class="onnew"><span class="text">New</span></span>
                                     </div>
                                     <div class="group-button">
                                         <div class="yith-wcwl-add-to-wishlist">
                                             <div class="yith-wcwl-add-button show">
                                                 <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                             </div>
                                         </div>
                                         <div class="lynessa product compare-button">
                                             <a href="#" class="compare button">Compare</a>
                                         </div>
                                         <a href="#" class="button yith-wcqv-button">Quick View</a>
                                         <div class="add-to-cart">
                                             <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                                 cart</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="product-info equal-elem">
                                     <h3 class="product-name product_title">
                                         <a href="#" tabindex="0">MARIE CAMI</a>
                                     </h3>
                                     <div class="rating-wapper nostar">
                                         <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                         <span class="review">(0)</span>
                                     </div>
                                     <span class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>134.00</span></span>
                                 </div>
                             </div>
                         </div>
                         <div class="product-item style-01 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                             <div class="product-inner tooltip-left">
                                 <div class="product-thumb">
                                     <a class="thumb-link" href="#" tabindex="0">
                                         <img class="img-responsive" src="assets/images/apro151-1-600x778.jpg" alt="HEM SMOCKING" width="600" height="778">
                                     </a>
                                     <div class="flash">
                                         <span class="onsale"><span class="number">-11%</span></span>
                                         <span class="onnew"><span class="text">New</span></span>
                                     </div>
                                     <div class="group-button">
                                         <div class="yith-wcwl-add-to-wishlist">
                                             <div class="yith-wcwl-add-button show">
                                                 <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                             </div>
                                         </div>
                                         <div class="lynessa product compare-button">
                                             <a href="#" class="compare button">Compare</a>
                                         </div>
                                         <a href="#" class="button yith-wcqv-button">Quick View</a>
                                         <div class="add-to-cart">
                                             <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                                 cart</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="product-info equal-elem">
                                     <h3 class="product-name product_title">
                                         <a href="#" tabindex="0">HEM SMOCKING</a>
                                     </h3>
                                     <div class="rating-wapper nostar">
                                         <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                         <span class="review">(0)</span>
                                     </div>
                                     <span class="price"><del><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>89.00</span></del> <ins><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>79.00</span></ins></span>
                                 </div>
                             </div>
                         </div>
                         <div class="product-item style-01 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple ">
                             <div class="product-inner tooltip-left">
                                 <div class="product-thumb">
                                     <a class="thumb-link" href="#" tabindex="-1">
                                         <img class="img-responsive" src="assets/images/apro13-1-600x778.jpg" alt="KNIT LIKE" width="600" height="778">
                                     </a>
                                     <div class="flash">
                                         <span class="onnew"><span class="text">New</span></span>
                                     </div>
                                     <div class="group-button">
                                         <div class="yith-wcwl-add-to-wishlist">
                                             <div class="yith-wcwl-add-button show">
                                                 <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                             </div>
                                         </div>
                                         <div class="lynessa product compare-button">
                                             <a href="#" class="compare button">Compare</a>
                                         </div>
                                         <a href="#" class="button yith-wcqv-button">Quick View</a>
                                         <div class="add-to-cart">
                                             <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                                 cart</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="product-info equal-elem">
                                     <h3 class="product-name product_title">
                                         <a href="#" tabindex="-1">KNIT LIKE</a>
                                     </h3>
                                     <div class="rating-wapper nostar">
                                         <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                         <span class="review">(0)</span>
                                     </div>
                                     <span class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>109.00</span></span>
                                 </div>
                             </div>
                         </div>
                         <div class="product-item style-01 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock last instock shipping-taxable purchasable product-type-simple ">
                             <div class="product-inner tooltip-left">
                                 <div class="product-thumb">
                                     <a class="thumb-link" href="#" tabindex="-1">
                                         <img class="img-responsive" src="assets/images/apro181-2-600x778.jpg" alt="BASIC SINGLET" width="600" height="778">
                                     </a>
                                     <div class="flash">
                                         <span class="onnew"><span class="text">New</span></span>
                                     </div>
                                     <div class="group-button">
                                         <div class="yith-wcwl-add-to-wishlist">
                                             <div class="yith-wcwl-add-button show">
                                                 <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                             </div>
                                         </div>
                                         <div class="lynessa product compare-button">
                                             <a href="#" class="compare button">Compare</a>
                                         </div>
                                         <a href="#" class="button yith-wcqv-button">Quick View</a>
                                         <div class="add-to-cart">
                                             <a href="#" class="button product_type_variable add_to_cart_button">Add to
                                                 cart</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="product-info equal-elem">
                                     <h3 class="product-name product_title">
                                         <a href="#" tabindex="-1">City
                                             life jumpers</a>
                                     </h3>
                                     <div class="rating-wapper nostar">
                                         <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                         <span class="review">(0)</span>
                                     </div>
                                     <span class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>98.00</span></span>
                                 </div>
                             </div>
                         </div>
                         <div class="product-item style-01 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock first instock featured downloadable shipping-taxable purchasable product-type-simple ">
                             <div class="product-inner tooltip-left">
                                 <div class="product-thumb">
                                     <a class="thumb-link" href="#" tabindex="-1">
                                         <img class="img-responsive" src="assets/images/apro171-1-600x778.jpg" alt="INSERT SINGLET" width="600" height="778">
                                     </a>
                                     <div class="flash">
                                         <span class="onnew"><span class="text">New</span></span>
                                     </div>
                                     <form class="variations_form cart">
                                         <table class="variations">
                                             <tbody>
                                                 <tr>
                                                     <td class="value">
                                                         <select title="box_style" data-attributetype="box_style" data-id="pa_color" class="attribute-select " name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes" tabindex="-1">
                                                             <option data-type="" data-pa_color="" value="">Choose an
                                                                 option
                                                             </option>
                                                             <option data-width="30" data-height="30" data-type="color" data-pa_color="#ffe59e" value="pink" class="attached enabled">Pink
                                                             </option>
                                                             <option data-width="30" data-height="30" data-type="color" data-pa_color="#a825ea" value="purple" class="attached enabled">Purple
                                                             </option>
                                                             <option data-width="30" data-height="30" data-type="color" data-pa_color="#b6b8ba" value="red" class="attached enabled">Red
                                                             </option>
                                                         </select>
                                                         <div class="data-val attribute-pa_color" data-attributetype="box_style">
                                                             <label>
                                                                 <input type="radio" name="color">
                                                                 <span class="change-value color" style="background: #3155e2;" data-value="blue">
                                                                 </span>
                                                             </label>
                                                             <label>
                                                                 <input type="radio" name="color">
                                                                 <span class="change-value color" style="background: #52b745;" data-value="green">
                                                                 </span>
                                                             </label>
                                                             <label>
                                                                 <input type="radio" name="color">
                                                                 <span class="change-value color" style="background: #ffe59e;" data-value="pink">
                                                                 </span>
                                                             </label>
                                                         </div>
                                                         <a class="reset_variations" href="#" tabindex="-1" style="visibility: hidden;">Clear</a>
                                                     </td>
                                                 </tr>
                                             </tbody>
                                         </table>
                                     </form>
                                     <div class="group-button">
                                         <div class="yith-wcwl-add-to-wishlist">
                                             <div class="yith-wcwl-add-button show">
                                                 <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                             </div>
                                         </div>
                                         <div class="lynessa product compare-button">
                                             <a href="#" class="compare button">Compare</a>
                                         </div>
                                         <a href="#" class="button yith-wcqv-button">Quick View</a>
                                         <div class="add-to-cart">
                                             <a href="#" class="button product_type_variable add_to_cart_button">Select
                                                 options</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="product-info equal-elem">
                                     <h3 class="product-name product_title">
                                         <a href="#" tabindex="-1">INSERT SINGLET</a>
                                     </h3>
                                     <div class="rating-wapper nostar">
                                         <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                         <span class="review">(0)</span>
                                     </div>
                                     <span class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>105.00</span> – <span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>110.00</span></span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-12 col-sm-12 lynessa_dreaming_upsell-product">
                     <div class="block-title">
                         <h2 class="product-grid-title">
                             Upsell Products
                             <span></span>
                         </h2>
                     </div>
                     <div class="owl-slick owl-products equal-container better-height" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;slidesToShow&quot;:4}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                         <div class="product-item style-01 post-27 product type-product status-publish has-post-thumbnail product_cat-table product_cat-new-arrivals product_cat-lamp product_tag-table product_tag-sock  instock shipping-taxable purchasable product-type-variable has-default-attributes ">
                             <div class="product-inner tooltip-left">
                                 <div class="product-thumb">
                                     <a class="thumb-link" href="#" tabindex="0">
                                         <img class="img-responsive" src="assets/images/apro141-1-600x778.jpg" alt="ELOISE SHIRRED" width="600" height="778">
                                     </a>
                                     <div class="flash">
                                         <span class="onnew"><span class="text">New</span></span>
                                     </div>
                                     <div class="group-button">
                                         <div class="yith-wcwl-add-to-wishlist">
                                             <div class="yith-wcwl-add-button show">
                                                 <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                             </div>
                                         </div>
                                         <div class="lynessa product compare-button">
                                             <a href="#" class="compare button">Compare</a>
                                         </div>
                                         <a href="#" class="button yith-wcqv-button">Quick View</a>
                                         <div class="add-to-cart">
                                             <a href="#" class="button product_type_external add_to_cart_button">Buy
                                                 it on Amazon</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="product-info equal-elem">
                                     <h3 class="product-name product_title">
                                         <a href="#" tabindex="0">Dining Restock</a>
                                     </h3>
                                     <div class="rating-wapper ">
                                         <div class="star-rating"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5</span></div>
                                         <span class="review">(1)</span>
                                     </div>
                                     <span class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>207.00</span></span>
                                 </div>
                             </div>
                         </div>
                         <div class="product-item style-01 post-26 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-hat last instock featured shipping-taxable product-type-external  ">
                             <div class="product-inner tooltip-left">
                                 <div class="product-thumb">
                                     <a class="thumb-link" href="#" tabindex="0">
                                         <img class="img-responsive" src="assets/images/apro31-1-600x778.jpg" alt="KNIT CARDIGAN" width="600" height="778">
                                     </a>
                                     <div class="flash">
                                         <span class="onnew"><span class="text">New</span></span>
                                     </div>
                                     <div class="group-button">
                                         <div class="yith-wcwl-add-to-wishlist">
                                             <div class="yith-wcwl-add-button show">
                                                 <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                             </div>
                                         </div>
                                         <div class="lynessa product compare-button">
                                             <a href="#" class="compare button">Compare</a>
                                         </div>
                                         <a href="#" class="button yith-wcqv-button">Quick View</a>
                                         <div class="add-to-cart">
                                             <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                 cart</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="product-info equal-elem">
                                     <h3 class="product-name product_title">
                                         <a href="#" tabindex="0">KNIT CARDIGAN</a>
                                     </h3>
                                     <div class="rating-wapper nostar">
                                         <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                         <span class="review">(0)</span>
                                     </div>
                                     <span class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>120.00</span></span>
                                 </div>
                             </div>
                         </div>
                         <div class="product-item style-01 post-37 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-bed product_tag-light product_tag-hat product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                             <div class="product-inner tooltip-left">
                                 <div class="product-thumb">
                                     <a class="thumb-link lynessa-product-gallery__image" href="#" tabindex="0">
                                         <img class="img-responsive wp-post-image" src="assets/images/apro83-1-600x778.jpg" alt="WIDE PANTS" width="600" height="778">
                                     </a>
                                     <div class="flash">
                                         <span class="onnew"><span class="text">New</span></span>
                                     </div>
                                     <div class="group-button">
                                         <div class="yith-wcwl-add-to-wishlist">
                                             <div class="yith-wcwl-add-button show">
                                                 <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                             </div>
                                         </div>
                                         <div class="lynessa product compare-button">
                                             <a href="#" class="compare button">Compare</a>
                                         </div>
                                         <a href="#" class="button yith-wcqv-button">Quick View</a>
                                         <div class="add-to-cart">
                                             <button href="#" class="button product_type_simple add_to_cart_button">Add to
                                                 cart</button>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="product-info equal-elem">
                                     <h3 class="product-name product_title">
                                         <a href="#" tabindex="0">WIDE PANTS</a>
                                     </h3>
                                     <div class="rating-wapper nostar">
                                         <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                         <span class="review">(0)</span>
                                     </div>
                                     <span class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>56.00</span></span>
                                 </div>
                             </div>
                         </div>
                         <div class="product-item style-01 post-1194 product_variation type-product_variation status-publish has-post-thumbnail product  instock shipping-taxable purchasable product-type-variation ">
                             <div class="product-inner tooltip-left">
                                 <div class="product-thumb">
                                     <a class="thumb-link" href="#" tabindex="-1">
                                         <img class="img-responsive" src="assets/images/apro302-600x778.jpg" alt="MARIE CAMI" width="600" height="778">
                                     </a>
                                     <div class="flash">
                                         <span class="onnew"><span class="text">New</span></span>
                                     </div>
                                     <div class="group-button">
                                         <div class="yith-wcwl-add-to-wishlist">
                                             <div class="yith-wcwl-add-button show">
                                                 <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                             </div>
                                         </div>
                                         <div class="lynessa product compare-button">
                                             <a href="#" class="compare button">Compare</a>
                                         </div>
                                         <a href="#" class="button yith-wcqv-button">Quick View</a>
                                         <div class="add-to-cart">
                                             <a href="#" class="button product_type_simple add_to_cart_button">Add to
                                                 cart</a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="product-info equal-elem">
                                     <h3 class="product-name product_title">
                                         <a href="#" tabindex="-1">MARIE CAMI</a>
                                     </h3>
                                     <div class="rating-wapper nostar">
                                         <div class="star-rating"><span style="width:0%">Rated <strong class="rating">0</strong> out of 5</span></div>
                                         <span class="review">(0)</span>
                                     </div>
                                     <span class="price"><span class="lynessa-Price-amount amount"><span class="lynessa-Price-currencySymbol">$</span>79.00</span></span>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     