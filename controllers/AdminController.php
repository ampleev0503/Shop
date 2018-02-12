<?php

namespace app\controllers;


use app\models\repositories\UserRepository;
use app\models\User;

class AdminController extends Controller
{
    protected $useLayout = false;

    public function actionIndex() {
        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        if ($user->isAdmin == 1) {
            echo $this->render("admin/index");
        } else {
            die('Access denied');
        }

    }


}