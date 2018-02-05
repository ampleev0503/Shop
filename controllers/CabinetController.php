<?php
/**
 * Created by PhpStorm.
 * User: Вадим
 * Date: 04.02.2018
 * Time: 7:51
 */

namespace app\controllers;

use app\models\User;
use app\models\repositories\UserRepository;


class CabinetController extends Controller
{

    public function actionIndex() {

        $userId = User::checkLogged();

        $user = (new UserRepository())->getOne($userId);

        //var_dump($user);

        echo $this->render("cabinet/index", ['user' => $user]);
    }

    public function actionEdit() {
        $userId = User::checkLogged();

        $flag = false;

        $user = (new UserRepository())->getOne($userId);



        if (isset($_POST['submit'])) {

            $user->email = trim($_POST['email']);
            $user->firstName = trim($_POST['firstName']);
            $user->lastName = trim($_POST['lastName']);
            $user->hashPass = md5(trim($_POST['password']));

            $flag = (new UserRepository())->update($user);
        }

        echo $this->render("cabinet/edit", ['user' => $user, 'flag' => $flag]);

    }

}