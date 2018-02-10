<?php
/**
 * Created by PhpStorm.
 * User: Вадим
 * Date: 10.02.2018
 * Time: 15:36
 */

namespace app\models\repositories;


use app\models\Basket;
use app\models\Repository;

class BasketRepository extends Repository
{

    public static function getTableName()
    {
        return 'basket';
    }

    public static function getEntityClass()
    {
        return Basket::class;
    }

}