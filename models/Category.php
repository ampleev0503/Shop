<?php

namespace app\models;

use app\models\repositories\CategoryRepository;
use app\helpers\Url;



class Category extends DataEntity
{
    public $id;
    public $categoryName;

    public function __construct($id = null, $categoryName = null)
    {
        $this->id;
        $this->categoryName = $categoryName;
    }

    public function getUrl()
    {
        if($this->id){
            return (new Url())->generate("product", "category", ['id' => $this->id]);
        }
        return false;
    }
}