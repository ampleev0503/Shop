<?php

namespace app\models;

use app\interfaces\IComparator;
use app\models\builder\ProductBuilder;
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


    /** @var \app\models\builder\ProductBuilder $productBuilder*/
    public function __construct(ProductBuilder $productBuilder)
    {
        $this->id = $productBuilder->getId();
        $this->name = $productBuilder->getName();
        $this->price = $productBuilder->getPrice();
        $this->idCategory = $productBuilder->getIdCategory();
        $this->description = $productBuilder->getDescription();
        $this->image = $productBuilder->getImage();
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