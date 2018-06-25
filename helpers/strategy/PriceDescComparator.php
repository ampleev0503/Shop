<?php
/**
 * Created by PhpStorm.
 * User: Вадим
 * Date: 25.06.2018
 * Time: 21:22
 */

namespace app\helpers\strategy;


use app\interfaces\IComparator;

class PriceDescComparator implements IComparator
{

    /** @var \app\models\Product $a */
    /** @var \app\models\Product $b */
    static function cmpPrice($a, $b) {
        if ($a->price == $b->price) {
            return 0;
        }

        return ($a->price > $b->price) ? -1 : 1;
    }

    /** @var \app\models\Product[] $products */
    public function compare($products)
    {
        usort($products, array($this, "cmpPrice"));
        return $products;
    }



}