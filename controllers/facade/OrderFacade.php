<?php

namespace app\controllers\facade;

use app\models\Basket;
use app\models\Order;
use app\models\repositories\OrderRepository;
use app\models\repositories\ProductRepository;


class OrderFacade
{

    private $totalPrice; // общая стоимость
    private $totalQuantity; // количество товаров в заказе
    private $productsInCart; // товары в корзине

    public function __construct()
    {
        // Получием данные из корзины
        $this->productsInCart = Basket::getProducts();

        // Дополнительная проверка на наличие товаров
        if ($this->productsInCart == false) {
            $this->totalPrice = null;
        } else {

            // Находим общую стоимость
            $productsIds = array_keys($this->productsInCart);
            $products = (new ProductRepository())->getProductsByIds($productsIds);
            $this->totalPrice = Basket::getTotalPrice($products);


            // Количество товаров
            $this->totalQuantity = Basket::countItems();
        }
    }

    public function getTotalPrice() {
        return $this->totalPrice;
    }

    public function getTotalQuantity() {
        return $this->totalQuantity;
    }

    public function checkout()
    {
        if ($this->productsInCart == false) {
            header("Location: /");
        } else {
            $order = new Order($_SESSION['user'], json_encode($this->productsInCart));

            (new OrderRepository())->insert($order);

            Basket::clear();
        }
    }

}