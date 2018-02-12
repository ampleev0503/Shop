<?php

namespace app\models\repositories;


use app\models\Order;
use app\models\Repository;

class OrderRepository extends Repository
{

    public static function getTableName()
    {
        return 'orders';
    }

    public static function getEntityClass()
    {
        return Order::class;
    }
}