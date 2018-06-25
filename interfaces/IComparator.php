<?php
/**
 * Created by PhpStorm.
 * User: Вадим
 * Date: 25.06.2018
 * Time: 21:16
 */

namespace app\interfaces;


interface IComparator
{

    /** @var \app\models\Product[] $products */
    public function compare($products);

}