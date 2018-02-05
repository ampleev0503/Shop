<?php
/**
 * Created by PhpStorm.
 * User: Вадим
 * Date: 18.12.2017
 * Time: 18:30
 */

namespace app\models\repositories;


use app\models\Product;
use app\models\Repository;

class ProductRepository extends Repository
{


    public static function getTableName()
    {
        return 'product';
    }

    public static function getEntityClass()
    {
        //возвратит полное имя класса с пространством имён
        return Product::class;
    }


}