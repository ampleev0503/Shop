<?php

namespace app\models\builder;

use app\models\Product;


class ProductBuilder
{

    private $id;
    private $name;
    private $price;
    private $idCategory;
    private $description;
    private $image;

    public function setId($id) {
        $this->id = $id;
    }
    public function getId() {
        return $this->id;
    }

    public function setName($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }

    public function setPrice($price) {
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price;
    }

    public function setIdCategory($idCategory) {
        $this->idCategory = $idCategory;
    }
    public function getIdCategory() {
        return $this->idCategory;
    }

    public function setDescription($description) {
        $this->description = $description;
    }
    public function getDescription() {
        return $this->description;
    }

    public function setImage($image) {
        $this->image = $image;
    }
    public function getImage() {
        return $this->image;
    }

    public function build()
    {return new Product($this);}

}