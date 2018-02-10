<?php


namespace app\controllers;

use app\base\App;
use app\models\Basket;
use app\models\repositories\ProductRepository;

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

}