<?php /** @var \app\models\Product[] $products */ ?>
<div class="slider">
    <div class="container">
        <div class="slider_text">
            <h1>THE BRAND</h1>
            <h2>OF LUXERIUOS <span class="last">FASHON</span></h2>
        </div>

    </div>
</div>

<div class="container">
    <div class="content offers">
        <div class="parent">
            <a class="item item_1" href="/product">
                <div class="white_block_1">
                    <h2>HOT DEAL</h2>
                    <h1>FOR MEN</h1>
                </div>
            </a>
            <a class="item item_2" href="/product">
                <div class="white_block_2">
                    <h2>LUXIROUS & TRENDY</h2>
                    <h1>ACCESORIES</h1>
                </div>
            </a>
        </div>
        <div class="parent">
            <a class="item item_3" href="/product">
                <div class="white_block_3">
                    <h2>30% OFFER</h2>
                    <h1>WOMEN</h1>
                </div>
            </a>
            <a class="item item_4" href="/product">
                <div class="white_block_4">
                    <h2>NEW ARRIVALS</h2>
                    <h1>FOR KIDS</h1>
                </div>
            </a>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <h2 class="h2_fetured_items">Fetured Items</h2>
        <p class="p_shop_for">Shop for items based on what we featured in this week</p>

        <div class="content products">
            <?php foreach ($products as $product): ?>
            <div class="block_product">
                <a class="wrap_href" href="<?= $product->getUrl() ?>">
                    <img class="img_product" src="<?= $product->image?>" alt="photo">
                    <div class="product_price">
                        <p class="p_name_product"><?= $product->name?></p>
                        <p class="p_price_product">$<?= $product->price?></p>
                    </div>
                </a>
                <div class="add_to_card" data-id="<?= $product->id?>">
                    <div class="mini_basket"></div>
                    <p class="p_add_to">Add to Cart</p>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>

<div class="container">
    <a class="content browse_all_btn" href="/product">
        <p class="p_browse_all">Browse All Product</p>
        <div class="right_arrow">
            <script src="https://use.fontawesome.com/88465977ad.js"></script>
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        </div>
    </a>

    <div class="offer_for_women_and_etc content">
        <div class="offer_for_women">
            <div class="block_text">
                <h2>30% <span class="last">OFFER</span></h2>
                <h3>FOR WOMEN</h3>
            </div>
        </div>

        <div class="and_etc">
            <article class="block_1">
                <div class="img_block_1"></div>
                <h4>Free Delivery</h4>
                <p class="p_block">Worldwide delivery on all. Authorit atively morph next-generation innovation witn extensive models. </p>
            </article>

            <article class="block_1">
                <div class="img_block_2"></div>
                <h4>Sales & discounts</h4>
                <p class="p_block">Worldwide delivery on all. Authorit atively morph next-generation innovation witn extensive models. </p>
            </article>

            <article class="block_1">
                <div class="img_block_3"></div>
                <h4>Quality assurance</h4>
                <p class="p_block">Worldwide delivery on all. Authorit atively morph next-generation innovation witn extensive models. </p>
            </article>
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


