<?php
namespace app\models;

class User extends DataEntity
{
    public $id;
    public $email;
    public $firstName;
    public $lastName;
    public $hashPass;


    public function __construct($email = null, $firstName = null, $lastName = null, $hashPass = null, $id = null)
    {
        $this->id;
        $this->email = $email;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->hashPass = $hashPass;
    }

    public static function auth($userId) {
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged() {
        //Если есть сессия, то возвращаем id пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }

        // Если сессии не будет, то перенаправляем на авторизацию
        header('Location: /user/login');
    }

    public static function isGuest() {
        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }



}