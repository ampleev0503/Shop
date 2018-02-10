<?php/** @var \app\models\Product $product*/?>
<?php/** @var \app\models\Product[] $itemsProduct*/?>
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



<div class="single_slider">
    <div class="container">
        <img class="img_single_slider" src="../img/Layer42.jpg" alt="">
        <a class="block_prev" href="#">
            <script src="https://use.fontawesome.com/eaf0c42a4f.js"></script>
            <i class="fa fa-angle-left" aria-hidden="true"></i>
        </a>
        <a class="block_next" href="#">
            <script src="https://use.fontawesome.com/f228fe352f.js"></script>
            <i class="fa fa-angle-right" aria-hidden="true"></i>
        </a>
    </div>
</div>

<div class="content women_collection">

    <div class="info">
        <h4>WOMEN COLLECTION</h4>
        <div class="red_line"></div>
        <h5>MOSCHINO CHEAP AND CHIC</h5>
        <p class="p_block">Compellingly actualize fully researched processes before proactive outsircing. Progressively sindicate collaborative architectures before cutting-edge services. Completevely visualize parallel core competencies rather than exceptional portals.</p>
        <p class="p_material">MATERIAL: <span>COTTON</span></p>
        <p class="p_designer">DESIGNER: <span>BINBURHAN</span></p>
        <div class="price">$<?= $product->price?></div>
    </div>

    <div class="property">
        <div class="choose_color">
            <p>CHOOSE COLOR</p>
            <a class="rectangle" href="#">
                <div class="square_color"></div>
                <p>Red</p>
                <script src="https://use.fontawesome.com/97ba5dd5ea.js"></script>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
        </div>
        <div class="choose_size">
            <p>CHOOSE SIZE</p>
            <a class="rectangle" href="#">
                <p>XXL</p>
                <script src="https://use.fontawesome.com/97ba5dd5ea.js"></script>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
        </div>
        <div class="quantity">
            <p>QUANTITY</p>
            <input type="text" placeholder="1" class="rectangle">
        </div>
        <a class="btn_add_to_card" href="#">
            <img class="img_basket" src="../img/basket_red.svg" alt="basket">
            <img class="img_basket_hover" src="../img/basket_white.svg" alt="basket">
            <p>Add to Cart</p>
        </a>
    </div>


</div>



<section>
    <div class="container">
        <div class="also">
            <h2>YOU MAY LIKE ALSO</h2>
            <div class="content products">

                <?php foreach ($itemsProduct as $item): ?>
                <div class="block_product">

                    <a class="wrap_href" href="<?= $item->getUrl()?>">
                        <div class="product_img">
                            <img class="center" src="../img/Layer44.png" alt="">
                        </div>
                        <div class="product_price">
                            <p class="p_name_product"><?= $item->name?></p>
                            <p class="p_price_product">$<?= $item->price?></p>
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
        </div>
    </div>
</section>

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


