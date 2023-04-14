<div class="fullwidth-template">
    <div class="slide-home-02">
        <div class="response-product product-list-owl owl-slick equal-container better-height"
            data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:0,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:1}"
            data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;0&quot;}}]">
            <div class="slide-wrap">
                <img src="assets/images/slide21.jpg" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5>Sale up to <span>40%</span> Off</h5>
                            <h1>The Summer</h1>
                            <h2>This Week Only</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-wrap">
                <img src="assets/images/slide22.jpg" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5>Hurry Up !</h5>
                            <h1>New Arrival</h1>
                            <h2>For Your Just In</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-wrap">
                <img src="assets/images/slide23.jpg" alt="image">
                <div class="slide-info">
                    <div class="container">
                        <div class="slide-inner">
                            <h5>Special Offer</h5>
                            <h1>Flash Sale</h1>
                            <h2>Up to <span>70%</span> Off</h2>
                            <a href="#">Shop now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-001 section-004">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="lynessa-banner style-04 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/banner244.jpg" class="attachment-full size-full" alt="img">
                            </figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <div class="title-wrap">
                                        <h6 class="title">Best</h6>
                                    </div>
                                    <div class="cate">Selling</div>
                                    <div class="button-wrap">
                                        <div class="subtitle">Big Sale Week</div>
                                        <a class="button" target="_self" href="#"><span>Shop now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="lynessa-banner style-04 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/banner252.jpg" class="attachment-full size-full" alt="img">
                            </figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <div class="title-wrap">
                                        <h6 class="title">New</h6>
                                    </div>
                                    <div class="cate">Season</div>
                                    <div class="button-wrap">
                                        <div class="subtitle">Available Now</div>
                                        <a class="button" target="_self" href="#"><span>Shop now</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-011">
        <div class="container">
            <div class="lynessa-heading style-01">
                <div class="heading-inner">
                    <h3 class="title">
                        New Arrival <span></span> </h3>
                    <div class="subtitle">
                        Nunc mauris enim, pretium quis orci eget.
                    </div>
                </div>
            </div>
            <div class="lynessa-products style-04">
                <div class="response-product product-list-owl owl-slick equal-container better-height"
                    data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:4,&quot;rows&quot;:1}"
                    data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;30&quot;}}]">


                    <!-- Lấy danh sách sản phẩm
                
                -->
                    <?php foreach ($list_sp as $value): 
                        extract($value);
                        $dis="";
                        if($quantity<=0){
                            $dis="disabled";
                        }
                        ?>
                        <div
                            class="product-item recent-product style-04 rows-space-0 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple  ">
                            <div class="product-inner tooltip-top tooltip-all-top">
                                <div class="product-thumb">
                                    <a class="thumb-link" href="index.php?sp=chitiet&id=<?= $value['idProduct'] ?>"
                                        tabindex="0">
                                        <img class="img-responsive" src="image/<?= $value['image'] ?>" alt="" width="270"
                                            height="350">
                                    </a>
                                    <div class="flash">
                                        <span class="onnew"><span class="text">New</span></span>
                                    </div>
                                    <div class="group-button">
                                        <div class="add-to-cart">
                                            <form action="?sp=addtocart" method="post">
                                                        <input type="hidden" name="img" value="<?= $value['image'] ?>"/>
                                                        <input type="hidden" name="name" value="<?=$value['namePro'] ?>"/>
                                                        <input type="hidden" name="price" value="<?=$value['price']?>"/>
                                                        <input type="hidden" name="id" value="<?=$value['idProduct'] ?>"/>
                                                        <input type="hidden" name="quantity" value="1"/>
                                           
                                            
                                                <button type="submit" <?=$dis?> name="addcart"
                                                    style="width: 40px;    background-color: #cf9163;"><img
                                                        src="./image/cart.svg"></button>
                                                </form>
                                            
                                        </div>
                                        <a href="#" class="button yith-wcqv-button">Quick View</a>
                                        <div class="lynessa product compare-button">
                                            <a href="#" class="compare button">Compare</a>
                                        </div>
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show">
                                                <a href="#" class="add_to_wishlist">Add to Wishlist</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name product_title">
                                        <a href="#" tabindex="0">
                                            <?= $value['namePro'] ?>
                                        </a>
                                    </h3>
                                    <span class="price"><span class="lynessa-Price-amount amount"><span
                                                class="lynessa-Price-currencySymbol">$</span>
                                            <?= $value['price'] ?>
                                        </span></span>
                                    <div class="rating-wapper nostar">
                                        <div class="star-rating"><span style="width:0%">Rated <strong
                                                    class="rating">0</strong> out of 5</span></div>
                                        <span class="review">(0)</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>


                <!--end chi tiet -->
            </div>
        </div>
    </div>
    <div class="section-012">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="lynessa-heading style-01">
                        <div class="heading-inner">
                            <h3 class="title">
                                Deal Of Day <span></span></h3>
                            <div class="subtitle">
                                Nunc mauris enim, pretium quis orci eget.
                            </div>
                        </div>
                    </div>
                    <div class="lynessa-products style-03">
                        <div class="response-product product-list-owl owl-slick equal-container better-height"
                            data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:true,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:2,&quot;rows&quot;:1}"
                            data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                            <div class="product-item on_sale style-03 rows-space-0 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock first instock sale shipping-taxable purchasable product-type-simple"
                                data-slick-index="0" style="margin-right: 30px; width: 520px;" aria-hidden="false"
                                tabindex="0" role="tabpanel" id="slick-slide10"
                                aria-describedby="slick-slide-control10">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="0">
                                            <img class="img-responsive" src="assets/images/apro51012-1-275x310.jpg"
                                                alt="SPORTY HOODIE" width="275" height="310">
                                        </a>
                                    </div>
                                    <div class="product-info equal-elem">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="0">SPORTY HOODIE</a>
                                        </h3>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>125.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>99.00</span></ins></span>
                                        <div class="process-valiable">
                                            <div class="valiable-text">
                                                <span class="text">
                                                    13% Already Sold </span>
                                                <span class="text">
                                                    Available: <span>
                                                        21 </span>
                                                </span>
                                            </div>
                                            <span class="valiable-total total">
                                                <span class="process" style="width: 13%"></span>
                                            </span>
                                        </div>
                                        <div class="countdown-product">
                                            <div class="lynessa-countdown" data-datetime="03/21/2021 12:00:00"><span
                                                    class="days"><span class="number">136</span><span
                                                        class="text">Days</span></span><span class="hour"><span
                                                        class="number">21</span><span
                                                        class="text">Hours</span></span><span class="mins"><span
                                                        class="number">55</span><span
                                                        class="text">Mins</span></span><span class="secs"><span
                                                        class="number">44</span><span class="text">Secs</span></span>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="https://ledthanhdat.vn/lynessa/home-02/?add-to-cart=36"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="36" data-product_sku="098J812-1"
                                                aria-label="Add “SPORTY HOODIE” to your cart" rel="nofollow"
                                                tabindex="0">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item on_sale style-03 rows-space-0 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simpl"
                                data-slick-index="1" style="margin-right: 30px; width: 520px;" aria-hidden="false"
                                tabindex="0" role="tabpanel" id="slick-slide11"
                                aria-describedby="slick-slide-control11">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="0">
                                            <img class="img-responsive" src="assets/images/apro71-1-275x310.jpg"
                                                alt="MINI SKIRT" width="275" height="310">
                                        </a>
                                    </div>
                                    <div class="product-info equal-elem">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="0">MINI SKIRT</a>
                                        </h3>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>109.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>89.00</span></ins></span>
                                        <div class="process-valiable">
                                            <div class="valiable-text">
                                                <span class="text">
                                                    50% Already Sold </span>
                                                <span class="text">
                                                    Available: <span>
                                                        15 </span>
                                                </span>
                                            </div>
                                            <span class="valiable-total total">
                                                <span class="process" style="width: 50%"></span>
                                            </span>
                                        </div>
                                        <div class="countdown-product">
                                            <div class="lynessa-countdown" data-datetime="03/12/2021 12:00:00"><span
                                                    class="days"><span class="number">127</span><span
                                                        class="text">Days</span></span><span class="hour"><span
                                                        class="number">21</span><span
                                                        class="text">Hours</span></span><span class="mins"><span
                                                        class="number">55</span><span
                                                        class="text">Mins</span></span><span class="secs"><span
                                                        class="number">44</span><span class="text">Secs</span></span>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="https://ledthanhdat.vn/lynessa/home-02/?add-to-cart=32"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="32" data-product_sku="009U199"
                                                aria-label="Add “MINI SKIRT” to your cart" rel="nofollow"
                                                tabindex="0">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-item on_sale style-03 rows-space-0 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple"
                                data-slick-index="2" style="margin-right: 30px; width: 520px;" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide12"
                                aria-describedby="slick-slide-control12">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro1211-2-275x310.jpg"
                                                alt="SLEEVELESS TOP" width="275" height="310">
                                        </a>
                                    </div>
                                    <div class="product-info equal-elem">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">SLEEVELESS TOP</a>
                                        </h3>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>138.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>119.00</span></ins></span>
                                        <div class="process-valiable">
                                            <div class="valiable-text">
                                                <span class="text">
                                                    9% Already Sold </span>
                                                <span class="text">
                                                    Available: <span>
                                                        21 </span>
                                                </span>
                                            </div>
                                            <span class="valiable-total total">
                                                <span class="process" style="width: 9%"></span>
                                            </span>
                                        </div>
                                        <div class="countdown-product">
                                            <div class="lynessa-countdown" data-datetime="11/29/2020 12:00:00"><span
                                                    class="days"><span class="number">389</span><span
                                                        class="text">Days</span></span><span class="hour"><span
                                                        class="number">21</span><span
                                                        class="text">Hours</span></span><span class="mins"><span
                                                        class="number">55</span><span
                                                        class="text">Mins</span></span><span class="secs"><span
                                                        class="number">44</span><span class="text">Secs</span></span>
                                            </div>
                                        </div>
                                        <div class="add-to-cart">
                                            <a href="https://ledthanhdat.vn/lynessa/home-02/?add-to-cart=28"
                                                data-quantity="1"
                                                class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                                data-product_id="28" data-product_sku="005K938"
                                                aria-label="Add “SLEEVELESS TOP” to your cart" rel="nofollow"
                                                tabindex="-1">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-013 section-001">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="lynessa-banner style-03 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/banner21.jpg" class="attachment-full size-full" alt="img">
                            </figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <div class="title-wrap">
                                        <h6 class="title">
                                            <a target="_self" href="#">Show now</a>
                                        </h6>
                                    </div>
                                    <div class="cate">Trend</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="lynessa-banner style-03 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/banner201.jpg" class="attachment-full size-full" alt="img">
                            </figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <div class="title-wrap">
                                        <h6 class="title">
                                            <a target="_self" href="#">Show now</a>
                                        </h6>
                                    </div>
                                    <div class="cate">
                                        New
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="lynessa-banner style-03 left-center">
                        <div class="banner-inner">
                            <figure class="banner-thumb">
                                <img src="assets/images/banner23.jpg" class="attachment-full size-full" alt="img">
                            </figure>
                            <div class="banner-info ">
                                <div class="banner-content">
                                    <div class="title-wrap">
                                        <h6 class="title">
                                            <a target="_self" href="#">Show now</a>
                                        </h6>
                                    </div>
                                    <div class="cate">
                                        Sale
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-007">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="lynessa-products style-06">
                        <h3 class="title">
                            <span>Best selling</span>
                        </h3>
                        <div class="response-product product-list-owl owl-slick equal-container better-height"
                            data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:3}"
                            data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                            <div
                                class="product-item best-selling style-06 rows-space-30 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="0">
                                            <img class="img-responsive" src="assets/images/apro151-1-90x90.jpg"
                                                alt="HEM SMOCKING" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="0">HEM SMOCKING</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>89.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>79.00</span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item best-selling style-06 rows-space-30 post-23 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-lamp product_cat-sofas product_tag-hat  instock shipping-taxable purchasable product-type-variable has-default-attributes">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="0">
                                            <img class="img-responsive" src="assets/images/apro171-1-90x90.jpg"
                                                alt="INSERT SINGLET" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="0">INSERT SINGLET</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>105.00</span> –
                                            <span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>110.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item best-selling style-06 rows-space-30 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="0">
                                            <img class="img-responsive" src="assets/images/apro71-1-90x90.jpg"
                                                alt="MINI SKIRT" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="0">MINI SKIRT</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>109.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>89.00</span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item best-selling style-06 rows-space-30 post-20 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_cat-specials product_tag-table product_tag-hat product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro201-1-90x90.jpg"
                                                alt="ELOISE SHIRRED" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">ELOISE SHIRRED</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>150.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>139.00</span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item best-selling style-06 rows-space-30 post-36 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_tag-light product_tag-table product_tag-sock  instock sale shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro51012-1-90x90.jpg"
                                                alt="SPORTY HOODIE" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">SPORTY HOODIE</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>125.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>99.00</span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item best-selling style-06 rows-space-30 post-49 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-sofas product_tag-multi product_tag-lamp last instock shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro302-90x90.jpg"
                                                alt="MARIE CAMI" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">MARIE CAMI</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>79.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item best-selling style-06 rows-space-30 post-93 product type-product status-publish has-post-thumbnail product_cat-light product_cat-table product_cat-new-arrivals product_tag-table product_tag-sock first instock shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro13-1-90x90.jpg"
                                                alt="KNIT LIKE" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">KNIT LIKE</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>109.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item best-selling style-06 rows-space-30 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro1211-2-90x90.jpg"
                                                alt="SLEEVELESS TOP" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">SLEEVELESS TOP</a>
                                        </h3>
                                        <div class="rating-wapper ">
                                            <div class="star-rating"><span style="width:100%">Rated <strong
                                                        class="rating">5.00</strong> out of 5</span></div>
                                            <span class="review">(1)</span>
                                        </div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>138.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>119.00</span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item best-selling style-06 rows-space-30 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro181-2-90x90.jpg"
                                                alt="BASIC SINGLET" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">BASIC SINGLET</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>98.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="lynessa-products style-06">
                        <h3 class="title">
                            <span>Top Rated</span>
                        </h3>
                        <div class="response-product product-list-owl owl-slick equal-container better-height"
                            data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:3}"
                            data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                            <div
                                class="product-item top-rated style-06 rows-space-30 post-26 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-hat first instock featured shipping-taxable product-type-external">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="0">
                                            <img class="img-responsive" src="assets/images/apro141-1-90x90.jpg"
                                                alt="ELOISE SHIRRED" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="0">ELOISE SHIRRED</a>
                                        </h3>
                                        <div class="rating-wapper ">
                                            <div class="star-rating"><span style="width:100%">Rated <strong
                                                        class="rating">5.00</strong> out of 5</span></div>
                                            <span class="review">(1)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>207.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item top-rated style-06 rows-space-30 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="0">
                                            <img class="img-responsive" src="assets/images/apro1211-2-90x90.jpg"
                                                alt="SLEEVELESS TOP" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="0">SLEEVELESS TOP</a>
                                        </h3>
                                        <div class="rating-wapper ">
                                            <div class="star-rating"><span style="width:100%">Rated <strong
                                                        class="rating">5.00</strong> out of 5</span></div>
                                            <span class="review">(1)</span>
                                        </div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>138.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>119.00</span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item top-rated style-06 rows-space-30 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="0">
                                            <img class="img-responsive" src="assets/images/apro71-1-90x90.jpg"
                                                alt="MINI SKIRT" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="0">MINI SKIRT</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>109.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>89.00</span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item top-rated style-06 rows-space-30 post-20 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_cat-specials product_tag-table product_tag-hat product_tag-sock first instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro201-1-90x90.jpg"
                                                alt="ELOISE SHIRRED" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">ELOISE SHIRRED</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>150.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>139.00</span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item top-rated style-06 rows-space-30 post-33 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-lamp product_tag-light product_tag-table product_tag-hat  instock shipping-taxable purchasable product-type-variable has-default-attributes">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro83-1-90x90.jpg"
                                                alt="Glasses" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">WIDE PANTS</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>56.00</span> –
                                            <span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>60.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item top-rated style-06 rows-space-30 post-21 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-lamp product_tag-light product_tag-sock last outofstock featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro191-1-90x90.jpg"
                                                alt="WIDE PANTS" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">WIDE PANTS</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>35.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item top-rated style-06 rows-space-30 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock sale featured shipping-taxable product-type-grouped">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro61-1-90x90.jpg"
                                                alt="INSERT TANK" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">INSERT TANK</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>79.00</span> –
                                            <span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>139.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item top-rated style-06 rows-space-30 post-22 product type-product status-publish has-post-thumbnail product_cat-table product_cat-bed product_cat-lamp product_tag-table product_tag-hat product_tag-sock  instock featured downloadable shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro181-2-90x90.jpg"
                                                alt="BASIC SINGLET" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">BASIC SINGLET</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>98.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item top-rated style-06 rows-space-30 post-35 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-new-arrivals product_cat-lamp product_tag-light product_tag-hat product_tag-sock last instock shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro41-1-90x90.jpg"
                                                alt="MARIE CAMI" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">MARIE CAMI</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>134.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <div class="lynessa-products style-06">
                        <h3 class="title">
                            <span>Featured</span>
                        </h3>
                        <div class="response-product product-list-owl owl-slick equal-container better-height"
                            data-slick="{&quot;arrows&quot;:true,&quot;slidesMargin&quot;:30,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:1,&quot;rows&quot;:3}"
                            data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;20&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:1,&quot;slidesMargin&quot;:&quot;30&quot;}}]">
                            <div
                                class="product-item featured_products style-06 rows-space-30 post-34 product type-product status-publish has-post-thumbnail product_cat-light product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock first instock sale featured shipping-taxable product-type-grouped">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="0">
                                            <img class="img-responsive" src="assets/images/apro61-1-90x90.jpg"
                                                alt="INSERT TANK" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="0">INSERT TANK</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>79.00</span> –
                                            <span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>139.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item featured_products style-06 rows-space-30 post-32 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-hat product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="0">
                                            <img class="img-responsive" src="assets/images/apro71-1-90x90.jpg"
                                                alt="MINI SKIRT" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="0">MINI SKIRT</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>109.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>89.00</span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item featured_products style-06 rows-space-30 post-30 product type-product status-publish has-post-thumbnail product_cat-light product_cat-bed product_cat-specials product_tag-light product_tag-table product_tag-sock last instock featured downloadable shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="0">
                                            <img class="img-responsive" src="assets/images/apro101-1-90x90.jpg"
                                                alt="STRIPE SKIRTS" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="0">STRIPE SKIRTS</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>60.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item featured_products style-06 rows-space-30 post-31 product type-product status-publish has-post-thumbnail product_cat-light product_cat-sofas product_tag-hat first instock sale featured shipping-taxable product-type-grouped">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro91-1-90x90.jpg"
                                                alt="Swing Dress" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">Swing Dress</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>89.00</span> –
                                            <span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>139.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item featured_products style-06 rows-space-30 post-29 product type-product status-publish has-post-thumbnail product_cat-new-arrivals product_cat-specials product_tag-light product_tag-sock  instock featured downloadable shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro1113-90x90.jpg"
                                                alt="Abstract Sweatshirt" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">Abstract Sweatshirt</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>129.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item featured_products style-06 rows-space-30 post-28 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-sock last instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro1211-2-90x90.jpg"
                                                alt="SLEEVELESS TOP" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">SLEEVELESS TOP</a>
                                        </h3>
                                        <div class="rating-wapper ">
                                            <div class="star-rating"><span style="width:100%">Rated <strong
                                                        class="rating">5.00</strong> out of 5</span></div>
                                            <span class="review">(1)</span>
                                        </div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>138.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>119.00</span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item featured_products style-06 rows-space-30 post-26 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-sofas product_tag-light product_tag-hat first instock featured shipping-taxable product-type-external">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro141-1-90x90.jpg"
                                                alt="ELOISE SHIRRED" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">ELOISE SHIRRED</a>
                                        </h3>
                                        <div class="rating-wapper ">
                                            <div class="star-rating"><span style="width:100%">Rated <strong
                                                        class="rating">5.00</strong> out of 5</span></div>
                                            <span class="review">(1)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>207.00</span></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item featured_products style-06 rows-space-30 post-25 product type-product status-publish has-post-thumbnail product_cat-light product_cat-chair product_cat-specials product_tag-light product_tag-sock  instock sale featured shipping-taxable purchasable product-type-simple">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro151-1-90x90.jpg"
                                                alt="HEM SMOCKING" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">HEM SMOCKING</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><del><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>89.00</span></del>
                                            <ins><span class="lynessa-Price-amount amount"><span
                                                        class="lynessa-Price-currencySymbol">$</span>79.00</span></ins></span>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-item featured_products style-06 rows-space-30 post-24 product type-product status-publish has-post-thumbnail product_cat-chair product_cat-table product_cat-new-arrivals product_tag-light product_tag-hat product_tag-sock last instock featured shipping-taxable purchasable product-type-variable has-default-attributes">
                                <div class="product-inner">
                                    <div class="product-thumb">
                                        <a class="thumb-link" href="#" tabindex="-1">
                                            <img class="img-responsive" src="assets/images/apro161-1-90x90.jpg"
                                                alt="MINI SKIRT" width="90" height="90">
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <h3 class="product-name product_title">
                                            <a href="#" tabindex="-1">MINI SKIRT</a>
                                        </h3>
                                        <div class="rating-wapper nostar">
                                            <div class="star-rating"><span style="width:0%">Rated <strong
                                                        class="rating">0</strong> out of 5</span></div>
                                            <span class="review">(0)</span>
                                        </div>
                                        <span class="price"><span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>45.00</span> –
                                            <span class="lynessa-Price-amount amount"><span
                                                    class="lynessa-Price-currencySymbol">$</span>54.00</span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-014">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="lynessa-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="pe-7s-rocket"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Worldwide Delivery</h4>
                                <div class="desc">With sites in 5 languages, we ship to over 200 countries &amp;
                                    regions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="lynessa-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="pe-7s-unlock"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Safe Shipping</h4>
                                <div class="desc">Pay with the world’s most popular and secure payment methods.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="lynessa-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="pe-7s-piggy"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">365 Days Return</h4>
                                <div class="desc">Round-the-clock assistance for a smooth shopping experience.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="lynessa-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon">
                                <span class="pe-7s-help2"></span>
                            </div>
                            <div class="content">
                                <h4 class="title">Shop Confidence</h4>
                                <div class="desc">Our Buyer Protection covers your purchase from click to delivery.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-008">
        <div class="lynessa-instagram style-01">
            <div class="instagram-owl owl-slick"
                data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:15,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}"
                data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;15&quot;}}]">
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy a" src="assets/images/insta1.jpg" alt="Home 01">
                        <span class="instagram-info">
                            <span class="social-wrap">
                                <span class="social-info">1
                                    <i class="pe-7s-chat"></i>
                                </span>
                                <span class="social-info">0
                                    <i class="pe-7s-like2"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy a" src="assets/images/insta2.jpg" alt="Home 01">
                        <span class="instagram-info">
                            <span class="social-wrap">
                                <span class="social-info">0
                                    <i class="pe-7s-chat"></i>
                                </span>
                                <span class="social-info">0
                                    <i class="pe-7s-like2"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy a" src="assets/images/insta3.jpg" alt="Home 01">
                        <span class="instagram-info">
                            <span class="social-wrap">
                                <span class="social-info">0
                                    <i class="pe-7s-chat"></i>
                                </span>
                                <span class="social-info">0
                                    <i class="pe-7s-like2"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy a" src="assets/images/insta4.jpg" alt="Home 01">
                        <span class="instagram-info">
                            <span class="social-wrap">
                                <span class="social-info">0
                                    <i class="pe-7s-chat"></i>
                                </span>
                                <span class="social-info">0
                                    <i class="pe-7s-like2"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="0">
                        <img class="img-responsive lazy a" src="assets/images/insta5.jpg" alt="Home 01">
                        <span class="instagram-info">
                            <span class="social-wrap">
                                <span class="social-info">0
                                    <i class="pe-7s-chat"></i>
                                </span>
                                <span class="social-info">0
                                    <i class="pe-7s-like2"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="-1">
                        <img class="img-responsive lazy a" src="assets/images/insta6.jpg" alt="Home 01">
                        <span class="instagram-info">
                            <span class="social-wrap">
                                <span class="social-info">0
                                    <i class="pe-7s-chat"></i>
                                </span>
                                <span class="social-info">0
                                    <i class="pe-7s-like2"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="-1">
                        <img class="img-responsive lazy a" src="assets/images/insta7.jpg" alt="Home 01">
                        <span class="instagram-info">
                            <span class="social-wrap">
                                <span class="social-info">0
                                    <i class="pe-7s-chat"></i>
                                </span>
                                <span class="social-info">0
                                    <i class="pe-7s-like2"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="rows-space-0">
                    <a target="_blank" href="#" class="item" tabindex="-1">
                        <img class="img-responsive lazy a" src="assets/images/insta8.jpg" alt="Home 01">
                        <span class="instagram-info">
                            <span class="social-wrap">
                                <span class="social-info">0
                                    <i class="pe-7s-chat"></i>
                                </span>
                                <span class="social-info">0
                                    <i class="pe-7s-like2"></i>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
