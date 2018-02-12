<?php
/**
 * Created by PhpStorm.
 * User: Вадим
 * Date: 13.02.2018
 * Time: 1:11
 */

namespace app\controllers;

use app\base\App;
use app\models\Category;
use app\models\repositories\CategoryRepository;
use app\models\repositories\UserRepository;
use app\models\User;

class AdminCategoryController extends Controller
{
    protected $useLayout = false;

    public function actionIndex() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            $itemsCategory = (new CategoryRepository())->getAll();
            echo $this->render("adminCategory/index", ['itemsCategory' => $itemsCategory]);
        } else {
            die('Access denied');
        }
    }

    public function actionCreate() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            if (isset($_POST['submit'])) {

                $category = new Category($_POST['name']);
                (new CategoryRepository())->insert($category);

                header("Location: /adminCategory");
            }
            echo $this->render("adminCategory/create");
        } else {
            die('Access denied');
        }
    }

    public function actionDelete() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            $id = App::call()->request->get('id');
            $category = (new CategoryRepository())->getOne($id);

            if (isset($_POST['submit'])) {
                // Если форма отправлена
                // Удаляем категорию
                (new CategoryRepository())->delete($category);

                // Перенаправляем пользователя на страницу управления категориями
                header("Location: /admincategory");
            }

            echo $this->render("admincategory/delete", ['category' => $category]);
        } else {
            die('Access denied');
        }
    }

    public function actionUpdate() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            $id = App::call()->request->get('id');
            $category = (new CategoryRepository())->getOne($id);

            if (isset($_POST['submit'])) {

                /** @var \app\models\Category $category */
                $category->categoryName = $_POST['name'];

                (new CategoryRepository())->update($category);

                header("Location: /admincategory");
            }

            echo $this->render("admincategory/update", ['category' => $category]);
        } else {
            die('Access denied');
        }
    }
}