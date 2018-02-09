<?php /** @var \app\models\Product[] $itemsProduct */ ?>
<?php /** @var \app\models\Category[] $itemsCategory */ ?>

<div class="new_arrivals">
    <div class="container">
        <h3>NEW ARRIVALS</h3>
        <div class="bread_crumbs">
            <a href="#">HOME /</a>
            <a href="#">MEN /</a>
            <a class="active" href="#">NEW ARRIVALS</a>
        </div>
    </div>
</div>


<div class="container">


    <div class="content_2">

        <div class="all_menu">
            <details open>
                <summary>CATEGORY
                    <span class="caret_down">
                            <i class="fa fa-caret-down" aria-hidden="true"></i>
                            <script src="https://use.fontawesome.com/521f614b02.js"></script>
                        </span>
                    <span class="caret_up">
                            <i class="fa fa-caret-up" aria-hidden="true"></i>
                            <script src="https://use.fontawesome.com/699de49bf4.js"></script>
                        </span>
                </summary>

                <?php foreach ($itemsCategory as $category): ?>
                    <a href="<?= $category->getUrl() ?>" class="<?php if ($idCategory == $category->id) echo 'active_category'?>">
                        <?= $category->categoryName?>
                    </a>
                <?php endforeach; ?>
            </details>

        </div>

        <div class="wrap_2">
            <div class="parameters">
                <div class="trending_now">
                    <h4>TRENDING NOW</h4>
                    <a href="#">Bohemian</a>
                    <p>|</p>
                    <a href="#">Floral</a>
                    <p>|</p>
                    <a href="#">Lace</a>
                    <a href="#">Floral</a>
                    <p>|</p>
                    <a href="#">Lace</a>
                    <p>|</p>
                    <a href="#">Bohemian</a>
                </div>
                <div class="size">
                    <h4>SIZE</h4>

                    <form action="#">
                        <input type="checkbox" id="check1">
                        <label for="check1">XXS</label>
                        <input type="checkbox" id="check2">
                        <label for="check2">XS</label>
                        <input type="checkbox" id="check3">
                        <label for="check3">S</label>
                        <input type="checkbox" id="check4">
                        <label for="check4">M</label><br>
                        <input type="checkbox" id="check5">
                        <label for="check5">L</label>
                        <input type="checkbox" id="check6">
                        <label for="check6">XL</label>
                        <input type="checkbox" id="check7">
                        <label for="check7">XXL</label>
                    </form>

                </div>
                <div class="price">
                    <h4>PRICE</h4>
                    <div class="grey_line">
                        <div class="red_line"></div>
                        <div class="circle_1"></div>
                        <div class="circle_2"></div>
                        <p class="begin_price">$52</p>
                        <p class="end_price">$400</p>
                    </div>
                </div>
            </div>

            <div class="group">
                <div class="sort_by">
                    <p>Sort By</p>
                </div>
                <a class="name" href="#">
                    <p>Name</p>
                    <div class="name_down">
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                        <script src="https://use.fontawesome.com/521f614b02.js"></script>
                    </div>
                </a>
                <div class="show">
                    <p>Show</p>
                </div>
                <a class="show_quantity" href="#">
                    <p>09</p>
                    <div class="name_down">
                        <i class="fa fa-caret-down" aria-hidden="true"></i>
                        <script src="https://use.fontawesome.com/521f614b02.js"></script>
                    </div>
                </a>
            </div>

            <div class="products">

                <?php foreach ($itemsProduct as $product): ?>
                <div class="block_product">
                    <a class="wrap_href" href="<?= $product->getUrl() ?>">
                        <img class="img_product" src="<?= $product->image?>" alt="photo">
                        <div class="product_price">
                            <p class="p_name_product"><?= $product->name?></p>
                            <p class="p_price_product">$<?= $product->price?></p>
                        </div>
                    </a>
                    <a class="add_to_card" href="#">
                        <div class="mini_basket"></div>
                        <p class="p_add_to">Add to Cart</p>
                    </a>
                    <a class="repost" href="#">
                        <script src="https://use.fontawesome.com/9bcd4327dc.js"></script>
                        <i class="fa fa-retweet" aria-hidden="true"></i>
                    </a>
                    <a class="love" href="#">
                        <script src="https://use.fontawesome.com/e36230332b.js"></script>
                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                    </a>
                </div>
                <?php endforeach; ?>

        </div>
            <a class="btn_view_all" href="#">
                <p>View All</p>
            </a>
    </div>
</div>

<div class="content_3">
    <div class="add_info">
        <div class="add_info_item add_info_item_1">
            <div class="img_add_info_item_1"></div>
            <h3>Free Delivery</h3>
            <p>Worldwide delivery on all. Authorit tively morph next-generation innovation with extensive models.</p>
        </div>
        <div class="add_info_item add_info_item_2">
            <div class="img_add_info_item_2"></div>
            <h3>Sales & discounts</h3>
            <p>Worldwide delivery on all. Authorit tively morph next-generation innovation with extensive models.</p>
        </div>
        <div class="add_info_item add_info_item_3">
            <div class="img_add_info_item_3"></div>
            <h3>Quality assurance</h3>
            <p>Worldwide delivery on all. Authorit tively morph next-generation innovation with extensive models.</p>
        </div>
    </div>
</div>


<div class="container">
    <div class="review">
        <div class="review_over">
            <div class="half_1">
                <figure>
                    <p class="p_my_review">"Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum a. Aliquam condimentum mattis neque sed pretium"</p>
                    <figcaption>Bin Burhan</figcaption>
                </figure>
                <h6>Dhaka, Bd</h6>
                <div class="face"></div>



                <div class="navigation">
                    <a class="block" href="#"></a>
                    <a class="block active" href="#"></a>
                    <a class="block" href="#"></a>
                </div>
            </div>

            <div class="half_2">
                <h3 class="h3_subscribe">SUBSCRIBE</h3>
                <h4 class="h4_subscribe">FOR OUR NEWLETTER AND PROMOTION</h4>
                <form action="#">
                    <input type="email" placeholder="Enter Your Email">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
</div>