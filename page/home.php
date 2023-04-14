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
                                        <a class="button" target="_self" href="?sp=shop"><span>Shop now</span></a>
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
                                        <a class="button" target="_self" href="?sp=shop"><span>Shop now</span></a>
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
                                 
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>


                <!--end chi tiet -->
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
   
