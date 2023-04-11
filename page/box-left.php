
<!-- tìm sản phẩm theo danh mục -->
<div id="lynessa_product_categories-3" class="widget lynessa widget_product_categories"><h2
                            class="widgettitle">Product categories<span class="arrow"></span></h2>
                        <ul class="product-categories">

                        <?php
                            foreach ($listdm as $top10) {
                                extract($top10);
                                
                                // tạo link sản phẩm chi tiết
                                $linksp="index.php?sp=sanphamct&id=".$idProduct;

                                echo '<li class="cat-item cat-item-22"><label><input type="checkbox"
                                        name="cate"><span>'.$name.'</span>
                                    <span class="count">(11)</span></label></li>';
                            }
                        
                        ?>

            
                        </ul>
                    </div>

                    <!-- tìm sản phẩm theo size -->
                    <div id="lynessa_layered_nav-6"
                         class="widget lynessa widget_layered_nav lynessa-widget-layered-nav"><h2
                            class="widgettitle">Filter By Size<span class="arrow"></span></h2>
                        <ul class="lynessa-widget-layered-nav-list">
                            <?php foreach ($loadall_size as $size) {
                                extract($size);

                                echo '<li class="lynessa-widget-layered-nav-list__item lynessa-layered-nav-term ">
                                <label><input type="checkbox" name="size">
                                    <span>'.$size.' mm</span>
                                    <span class="count">(4)</span></label></li>';
                            }  ?>
                            
                        </ul>
                    </div>
                

                <div id="lynessa_lynessa_layered_nav-4"
                         class="widget lynessa_widget_layered_nav widget_layered_nav">
                        <h2 class="widgettitle">Top 10 most popular products<span class="arrow"></span></h2>
                        
                        <?php
                            foreach ($loadtop10 as $top10) {
                                extract($top10);
                                
                                // tạo link sản phẩm chi tiết
                                $linksp="index.php?sp=sanphamct&id=".$idProduct;

                                echo '<div class="box10">
                                        <img class="img" src="image/'.$image.'" alt="">
                                        <a href="">'.$name.'</a>
                                       </div> ';
                            }
                        
                        ?>

                
                    </div>