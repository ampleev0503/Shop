<?php

namespace app\models;

use app\models\repositories\CategoryRepository;



class Category extends DataEntity
{
    public $id;
    public $categoryName;

    public function __construct($id = null, $categoryName = null)
    {
        $this->id;
        $this->categoryName = $categoryName;
    }
}