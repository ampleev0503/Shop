<?php


namespace app\models;



use app\models\transactionScript\AddProductTransactionScript;

class Basket extends DataEntity
{



    public static function addProduct($id)
    {
        $transaction = new AddProductTransactionScript($id);
        $transaction->checkExistsProductsInBasket();
        $transaction->checkCompareProductsInBasket();

        // Возвращаем количество товаров в корзине
        return self::countItems();
   }

    /**
     * Подсчет количество товаров в корзине (в сессии)
     * @return int <p>Количество товаров в корзине</p>
     */
    public static function countItems()
    {
        // Проверка наличия товаров в корзине
        if (isset($_SESSION['products'])) {
            // Если массив с товарами есть
            // Подсчитаем и вернем их количество
            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {
            // Если товаров нет, вернем 0
            return 0;
        }
    }

    public static function getProducts() {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

    public static function getSubtotalPrice($price, $quantity) {
        return $price * $quantity;
    }

    public static function getTotalPrice($products)
    {
        // Получаем массив с идентификаторами и количеством товаров в корзине
        $productsInCart = self::getProducts();

        // Подсчитываем общую стоимость
        $total = 0;
        if ($productsInCart) {
            foreach ($products as $item) {
                // Находим общую стоимость: цена товара * количество товара
                $total += $item->price * $productsInCart[$item->id];
            }
        }

        return $total;
    }

    public static function deleteProduct($id) {

        $productsInCart = self::getProducts();

        if ($productsInCart) {
            unset($productsInCart[$id]);
            $_SESSION['products'] = $productsInCart;
        }
    }

    public static function clear()
    {
        if (isset($_SESSION['products'])) {
            unset($_SESSION['products']);
        }
    }

}