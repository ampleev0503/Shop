<?php


namespace app\controllers;


use app\base\App;
use app\models\repositories\CategoryRepository;
use app\models\repositories\ProductRepository;

class ProductController extends Controller
{
    public function actionCard() {
        $id = App::call()->request->get('id');
        $product = (new ProductRepository())->getOne($id);
        $itemsProduct = (new ProductRepository())->getLimit(4);
        echo $this->render("product/card", ['product' => $product, 'itemsProduct' => $itemsProduct]);
    }


    public function actionIndex(){
        $itemsProduct = (new ProductRepository())->getLimit(9);
        $itemsCategory = (new CategoryRepository())->getAll();
        echo $this->render("product/index", ['itemsProduct' => $itemsProduct, 'itemsCategory' => $itemsCategory]);
    }

    public function actionViewAll(){
        $itemsProduct = (new ProductRepository())->getAll();
        $itemsCategory = (new CategoryRepository())->getAll();
        echo $this->render("product/index", ['itemsProduct' => $itemsProduct, 'itemsCategory' => $itemsCategory]);
    }

    public function actionCategory() {
        $idCategory = App::call()->request->get('id');


        //$itemsProduct = (new ProductRepository())->getLimit(6);
        $itemsProduct = (new ProductRepository())->getProductsCategory($idCategory);
        $itemsCategory = (new CategoryRepository())->getAll();
        echo $this->render("product/index",
                            ['itemsProduct' => $itemsProduct,
                             'itemsCategory' => $itemsCategory,
                             'idCategory' => $idCategory]);
    }
}