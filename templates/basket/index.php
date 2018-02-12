<?php/** @var \app\models\Product[] $productsInBasket*/?>

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

<div class="content">
    <?php if ($itemsProduct): ?>
    <div class="head">
        <h3 class="h3_item_1">PRODUCT DETAILS</h3>
        <h3 class="h3_item_2">UNITE PRICE</h3>
        <h3 class="h3_item_3">QUANTITY</h3>
        <h3 class="h3_item_4">SHIPPING</h3>
        <h3 class="h3_item_5">SUBTOTAL</h3>
        <h3 class="h3_item_6">ACTION</h3>
    </div>


        <?php foreach ($productsInBasket as $product): ?>
        <div class="product_in_basket">
            <img src="img/1.jpg" class="img_product_in_basket" alt="mango people t-shirt">
            <h4><?= $product->name?></h4>
            <div class="color_size">
                <p>Color: <span class="property">Red</span></p>
                <p>Size: <span class="property">Xll</span></p>
            </div>
            <p class="price">$<?= $product->price?></p>
            <div class="quantity">
                <p><?= $itemsProduct[$product->id]?></>
            </div>
            <p class="p_shipping">FREE</p>
            <p class="p_subtotal">$<?= \app\models\Basket::getSubtotalPrice($product->price, $itemsProduct[$product->id])?></p>
            <a class="delete" href="/basket/delete/?id=<?= $product->id?>">
                <script src="https://use.fontawesome.com/d5b1114ae1.js"></script>
                <i class="fa fa-times-circle" aria-hidden="true"></i>
            </a>
        </div>
        <?php endforeach; ?>
    <?php else: ?>
        <h2>Корзина пуста</h2>
    <?php endif;?>

    <?php if ($itemsProduct): ?>
    <div class="wrap_btn">
        <a class="btn_clear" href="#">
            <p>CLEAR SHOPPING CART</p>
        </a>

        <a class="btn_cont" href="#">
            <p>CONTINUE SHOPPING</p>
        </a>
    </div>

    <div class="block_adress">
        <div class="shipping_adress">
            <h4>SHIPPING ADRESS</h4>
            <form action="#">
                <input type="text" name="bangl" placeholder="Bangladesh"><br>
                <input type="text" placeholder="State"><br>
                <input type="text" placeholder="Postcode / Zip"><br>
                <input type="submit" name="submit" value="GET A QUOTE">
            </form>
        </div>
        <div class="coupon_discount">
            <h4>COUPON DISCOUNT</h4>
            <p>Enter your coupon code if you have one</p>
            <form action="#">
                <input type="text"> <br>
                <input type="submit" name="submit" value="APPLY COUPON">
            </form>
        </div>
        <div class="checkout">
            <div class="grand_total">
                <h5>SUB TOTAL <span>$<?= \app\models\Basket::getTotalPrice($productsInBasket)?></span></h5>
                <h4>GRAND TOTAL <span>$<?= \app\models\Basket::getTotalPrice($productsInBasket)?></span></h4>
            </div>
            <div class="strip"></div>
            <a class="btn_proc_to_checkout" href="/basket/checkout">
                <p>PROCEED TO CHECKOUT</p>
            </a>

        </div>

    </div>
    <?php endif;?>



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