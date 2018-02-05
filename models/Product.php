<?php

namespace app\models;

use app\helpers\Url;

class Product extends DataEntity
{
    public $id;
    public $name;
    public $price;

    /**
     * Product constructor.
     * @param $id
     * @param $name
     * @param $price
     */
    public function __construct($id = null, $name = null, $price = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
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
        //return mb_substr($this->description, 0 ,50);
        return $this->price;
    }

}