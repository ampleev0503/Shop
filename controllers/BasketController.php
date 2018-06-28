<?php


namespace app\controllers;

use app\base\App;
use app\controllers\facade\OrderFacade;
use app\models\Basket;
use app\models\Order;
use app\models\repositories\OrderRepository;
use app\models\repositories\ProductRepository;
use app\models\User;

//use app\models\repositories\BasketRepository;


class BasketController extends Controller
{

    public function actionIndex() {

        $itemsProduct = Basket::getProducts();

        //var_dump($itemsProduct);


        if ($itemsProduct) {
            $productsIds = array_keys($itemsProduct);
            $productsInBasket = (new ProductRepository())->getProductsByIds($productsIds);
        } else {
            $productsInBasket = [];
        }
        echo $this->render("basket/index", ['productsInBasket' => $productsInBasket, 'itemsProduct' => $itemsProduct]);
    }

    public function actionAddAjax() {
        $id = App::call()->request->get('id');
        echo Basket::addProduct($id);
    }

    public function actionDelete() {
        $id = App::call()->request->get('id');

        Basket::deleteProduct($id);

        header("Location: /basket");
    }

    public function actionCheckout() {
        if (User::isGuest()) {
            header("Location: /user/login");
        } else {

            $orderFacade = new OrderFacade();
            $orderFacade->checkout();

            echo $this->render("basket/checkout",
                                ['totalPrice' => $orderFacade->getTotalPrice(), 'totalQuantity' => $orderFacade->getTotalQuantity()]);
        }
    }

}