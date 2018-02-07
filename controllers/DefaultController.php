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
        $items = (new ProductRepository())->getAll();
        echo $this->render("product/index", ['items' => $items]);
    }

}