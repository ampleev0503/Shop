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
        return 'products';
    }

    public static function getEntityClass()
    {
        //возвратит полное имя класса с пространством имён
        return Product::class;
    }

    public function getProductsCategory($id)
    {
        $tableName = static::getTableName();
        $sql = "SELECT * FROM {$tableName}
        inner join categories on products.idCategory = categories.id 
        WHERE products.idCategory = :id";
        return static::getDb()->queryAll($sql, [':id' => $id], static::getEntityClass());
    }

    public function getProductsByIds($idsArray) {
        $tableName = static::getTableName();

        $idsArray = implode(',', $idsArray);

        $sql = "SELECT * FROM {$tableName} WHERE id IN ($idsArray)";

        //var_dump($sql);

        return static::getDb()->queryAll($sql, [], static::getEntityClass());


    }


}