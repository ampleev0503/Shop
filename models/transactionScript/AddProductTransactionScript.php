<?php

namespace app\models\transactionScript;

/**
 * Created by PhpStorm.
 * User: Вадим
 * Date: 22.07.2018
 * Time: 19:34
 */
class AddProductTransactionScript
{

    protected $id;
    protected $productsInCart = [];

    public function __construct($id = null)
    {
        // Приводим $id к типу integer
        $this->id = intval($id);
    }

    public function checkExistsProductsInBasket()
    {
        // Если в корзине уже есть товары (они хранятся в сессии)
        if (isset($_SESSION['products'])) {
            // То заполним наш массив товарами
            $this->productsInCart = $_SESSION['products'];
        }
    }

    public function checkCompareProductsInBasket()
    {
        // Проверяем есть ли уже такой товар в корзине
        if (array_key_exists($this->id, $this->productsInCart)) {
            // Если такой товар есть в корзине, но был добавлен еще раз, увеличим количество на 1
            $this->productsInCart[$this->id]++;
        } else {
            // Если нет, добавляем id нового товара в корзину с количеством 1
            $this->productsInCart[$this->id] = 1;
        }

        // Записываем массив с товарами в сессию
        $_SESSION['products'] = $this->productsInCart;
    }

}