<?php

namespace app\models\repositories;

use app\models\Repository;
use app\models\Category;


class CategoryRepository extends Repository
{

    public static function getTableName()
    {
        return 'categories';
    }

    public static function getEntityClass()
    {
        return Category::class;
    }
}