<?php

namespace app\controllers;


use app\base\App;
use app\models\repositories\OrderRepository;
use app\models\repositories\ProductRepository;
use app\models\repositories\UserRepository;
use app\models\User;

class AdminOrderController extends Controller
{
    protected $useLayout = false;

    public function actionIndex() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            $itemsOrder = (new OrderRepository())->getAll();
            echo $this->render("adminorder/index", ['itemsOrder' => $itemsOrder]);
        } else {
            die('Access denied');
        }
    }

    public function actionDelete() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            $id = App::call()->request->get('id');
            $order = (new OrderRepository())->getOne($id);

            if (isset($_POST['submit'])) {
                // Если форма отправлена
                // Удаляем категорию
                (new OrderRepository())->delete($order);

                // Перенаправляем пользователя на страницу управления категориями
                header("Location: /adminorder");
            }

            echo $this->render("adminorder/delete", ['order' => $order]);
        } else {
            die('Access denied');
        }
    }

    public function actionView() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            $id = App::call()->request->get('id');

            $order = (new OrderRepository())->getOne($id);

            /** @var \app\models\Order $order */
            $productsQuantity = json_decode($order->productsOrder, true);

            // Получаем массив с индентификаторами товаров
            $productsIds = array_keys($productsQuantity);

            // Получаем список товаров в заказе
            $itemsProduct = (new ProductRepository())->getProductsByIds($productsIds);

            echo $this->render("adminorder/view", ['order' => $order, 'itemsProduct' => $itemsProduct,
                                                            'productsQuantity' => $productsQuantity]);
        } else {
            die('Access denied');
        }

    }

    public function actionUpdate() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            $id = App::call()->request->get('id');
            $order = (new OrderRepository())->getOne($id);

            if (isset($_POST['submit'])) {

                /** @var \app\models\Order $order */
                $order->idOrderStatus = $_POST['status'];

                (new OrderRepository())->update($order);

                header("Location: /adminorder");
            }

            echo $this->render("adminorder/update", ['order' => $order]);
        } else {
            die('Access denied');
        }
    }

}