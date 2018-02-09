<?php
/**
 * Created by PhpStorm.
 * User: Вадим
 * Date: 06.02.2018
 * Time: 21:12
 */

namespace app\controllers;

use app\models\repositories\ProductRepository;



class DefaultController extends Controller
{

    public function actionIndex() {
        //$products = (new ProductRepository())->getAll();
        $products = (new ProductRepository())->getLimit(8);
        echo $this->render("site/index", ['products' => $products]);
    }

}