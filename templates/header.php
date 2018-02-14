<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">

    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/addproduct.js"></script>
    <script src="../js/slider.js"></script>

</head>

<body>

<header>
    <div class="container">
        <a href="/">
            <img class="logo" src="../img/Group2.jpg" alt="logo">
            <h1>BRAN<span class="last">D</span></h1>
        </a>

        <div class="browse_btn">
            <a class="href_browse_btn" href="#"><span class="browse">Browse</span></a>
            <div class="arrow_down_1">
                <script src="https://use.fontawesome.com/46f0d19bc8.js"></script>
                <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>
            <div class="browse_drop">
                <div class="fill_trnsfrm"></div>

                <h4>WOMEN</h4>
                <ul class="submenu">
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Tops</a></li>
                    <li><a href="#">Sweaters/Knits</a></li>
                    <li><a href="#">Jackets/Coats</a></li>
                    <li><a href="#">Blazers</a></li>
                    <li><a href="#">Denim</a></li>
                    <li><a href="#">Leggings/Pants</a></li>
                    <li><a href="#">Skirts/Shorts</a></li>
                    <li><a href="#">Accessories</a></li>
                </ul>


                <h4>MEN</h4>
                <ul class="submenu">
                    <li><a href="#">Dresses</a></li>
                    <li><a href="#">Tops</a></li>
                    <li><a href="#">Sweaters/Knits</a></li>
                    <li><a href="#">Jackets/Coats</a></li>
                    <li><a href="#">Blazers</a></li>
                    <li><a href="#">Denim</a></li>
                </ul>

            </div>
        </div>




        <input type="text" placeholder="Search for Item...">
        <a class="search_icon" href="#">
            <script src="https://use.fontawesome.com/262c107475.js"></script>
            <i class="fa fa-search" aria-hidden="true"></i>
        </a>

        <div class="basket_block">
            <a class="basket" href="/basket"></a>
            <div class="ellipse_count">
                <p><?= \app\models\Basket::countItems()?></p>
            </div>

            <div class="cart_block">
                <div class="fill_trnsfrm"></div>
                <div class="prod_in_basket">
                    <img src="img/cart1.jpg" alt="product in basket">
                    <h4>REBOX ZANE</h4>
                    <span class="star">
                            <script src="https://use.fontawesome.com/792deb4345.js"></script>
							<i class="fa fa-star" aria-hidden="true"></i>
							<script src="https://use.fontawesome.com/792deb4345.js"></script>
							<i class="fa fa-star" aria-hidden="true"></i>
							<script src="https://use.fontawesome.com/792deb4345.js"></script>
							<i class="fa fa-star" aria-hidden="true"></i>
							<script src="https://use.fontawesome.com/792deb4345.js"></script>
							<i class="fa fa-star" aria-hidden="true"></i>
							<script src="https://use.fontawesome.com/99d2aad182.js"></script>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
						</span>
                    <p>1 x $250</p>
                    <a class="marker_delete" href="#">
                        <script src="https://use.fontawesome.com/c1c3d05922.js"></script>
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="prod_in_basket">
                    <img src="img/cart2.jpg" alt="product in basket">
                    <h4>REBOX ZANE</h4>
                    <span class="star">
                            <script src="https://use.fontawesome.com/792deb4345.js"></script>
							<i class="fa fa-star" aria-hidden="true"></i>
							<script src="https://use.fontawesome.com/792deb4345.js"></script>
							<i class="fa fa-star" aria-hidden="true"></i>
							<script src="https://use.fontawesome.com/792deb4345.js"></script>
							<i class="fa fa-star" aria-hidden="true"></i>
							<script src="https://use.fontawesome.com/792deb4345.js"></script>
							<i class="fa fa-star" aria-hidden="true"></i>
							<script src="https://use.fontawesome.com/99d2aad182.js"></script>
							<i class="fa fa-star-half-o" aria-hidden="true"></i>
						</span>
                    <p>1 x $250</p>
                    <a class="marker_delete" href="#">
                        <script src="https://use.fontawesome.com/c1c3d05922.js"></script>
                        <i class="fa fa-times-circle" aria-hidden="true"></i>
                    </a>
                </div>
                <h5>TOTAL <span>&dollar;500.00</span></h5>
                <div class="checkout_btn"><a href="checkout.html">CHECKOUT</a></div>
                <div class="gotocart_btn"><a href="shopping_cart.html">GO TO CART</a></div>
            </div>
        </div>

        <!--            <a class="my_account_btn" href="#">-->
        <div class="my_account">
            <p>My Account</p>

            <div class="arrow_down_2">
                <script src="https://use.fontawesome.com/46f0d19bc8.js"></script>
                <i class="fa fa-caret-down" aria-hidden="true"></i>
            </div>

            <div class="my_acc_menu">
                <?php if (app\models\User::isGuest()): ?>
                    <a class="link" href="/user/login">Login</a>
                <?php else: ?>
                    <a class="link" href="/cabinet">My Account</a>
                    <a class="link" href="/user/logout">Logout</a>
                <?php endif; ?>
            </div>

        </div>
        <!--            </a>-->

    </div>
</header>
