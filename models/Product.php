<?php

namespace app\models;

use app\interfaces\IComparator;
use app\models\repositories\ProductRepository;
use app\helpers\Url;

class Product extends DataEntity
{
    public $id;
    public $name;
    public $price;
    public $idCategory;
    public $description;
    public $image;



    public function __construct($name = null, $price = null, $idCategory = null, $description = null, $image = null, $id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->idCategory = $idCategory;
        $this->description = $description;
        $this->image = $image;
    }

    public function getUrl()
    {
        if($this->id){
            return (new Url())->generate("product", "card", ['id' => $this->id]);
        }
        return false;
    }

    public function getShortDescription()
    {
        return mb_substr($this->description, 0 ,50);
        //return $this->price;
    }

    /** @var \app\models\Product[] $products */
    public static function sortProducts(IComparator $comparator, $products)
    {
        return $comparator->compare($products);
    }

}