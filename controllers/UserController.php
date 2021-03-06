<?php

namespace app\controllers;

use app\models\User;
use app\models\repositories\UserRepository;


class UserController extends Controller
{

    public function actionRegistration() {

        if (isset($_POST['submit'])) {
            $email = trim($_POST['email']);
            $firstName = trim($_POST['firstName']);
            $lastName = trim($_POST['lastName']);
            $hashPass = md5(trim($_POST['password']));

            $user = new User($email, $firstName, $lastName, $hashPass);

            //var_dump($user);

            (new UserRepository())->insert($user);

            header('Location: /');


        }

        echo $this->render("user/registr");
    }

    public function actionLogin() {
        if (isset($_POST['submit'])) {
            $email = trim($_POST['email']);
            $hashPass = md5(trim($_POST['password']));

            $userId = UserRepository::checkUserData($email, $hashPass);

            //var_dump($user);

            if ($userId == false) {
                $errors[] = 'Неправильные данные для входа на сайт';
            } else {
                //Запоминаем пользователя в сессию
                User::auth($userId);

                header('Location: /cabinet');
            }
        }

        echo $this->render("user/login", ['errors' => $errors]);

    }

    public function actionLogout() {
        unset($_SESSION['user']);
        //unset($_SESSION['products']);
        header("Location: /");
    }

}