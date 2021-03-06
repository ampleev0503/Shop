<?php
namespace app\controllers;

use app\base\App;
use app\models\Product;
use app\models\repositories\CategoryRepository;
use app\models\repositories\UserRepository;
use app\models\User;
use app\models\repositories\ProductRepository;

class AdminProductController extends Controller
{
    protected $useLayout = false;

    public function actionIndex() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            $itemsProduct = (new ProductRepository())->getAll();
            echo $this->render("adminProduct/index", ['itemsProduct' => $itemsProduct]);
        } else {
            die('Access denied');
        }
    }

    public function actionDelete() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            $id = App::call()->request->get('id');
            $product = (new ProductRepository())->getOne($id);

            if (isset($_POST['submit'])) {
                // Если форма отправлена
                // Удаляем товар
                (new ProductRepository())->delete($product);

                // Перенаправляем пользователя на страницу управлениями товарами
                header("Location: /adminproduct");
            }

            echo $this->render("adminProduct/delete", ['product' => $product]);
        } else {
            die('Access denied');
        }
    }

    public function actionCreate() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            if (isset($_POST['submit'])) {


                $path = null;
                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/img/{$_FILES["image"]["name"]}");
                    $path = "/img/{$_FILES["image"]["name"]}";
                }


                $product = new Product($_POST['name'], $_POST['price'], $_POST['category_id'], $_POST['description']);
                $product->image = $path;
                (new ProductRepository())->insert($product);

                //var_dump($_FILES['image']);
                header("Location: /adminproduct");
            }

            $itemsCategory = (new CategoryRepository())->getAll();

            echo $this->render("adminProduct/create", ['itemsCategory' => $itemsCategory]);
        } else {
            die('Access denied');
        }
    }



    public function actionUpdate() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            $id = App::call()->request->get('id');
            $product = (new ProductRepository())->getOne($id);

            if (isset($_POST['submit'])) {

                /** @var \app\models\Product $product */
                $product->name = $_POST['name'];
                $product->price = $_POST['price'];
                $product->idCategory = $_POST['category_id'];
                $product->description = $_POST['description'];

                // Проверим, загружалось ли через форму изображение
                if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                    // Если загружалось, переместим его в нужную папке, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/img/{$_FILES["image"]["name"]}");
                    $path = "/img/{$_FILES["image"]["name"]}";
                    $product->image = $path;
                }


                (new ProductRepository())->update($product);

                header("Location: /adminproduct");
            }

            $itemsCategory = (new CategoryRepository())->getAll();

            echo $this->render("adminProduct/update", ['itemsCategory' => $itemsCategory, 'product' => $product]);
        } else {
            die('Access denied');
        }
    }

}