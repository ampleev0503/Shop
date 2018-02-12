<?php
/**
 * Created by PhpStorm.
 * User: Вадим
 * Date: 12.02.2018
 * Time: 2:23
 */

namespace app\models;


class Order extends DataEntity
{
    public $id;
    public $idUser;
    public $idOrderStatus;
    public $productsOrder;


    public function __construct($idUser = null, $productsOrder = null, $idOrderStatus = 1, $id = null)
    {
        $this->id;
        $this->idUser = $idUser;
        $this->idOrderStatus = $idOrderStatus;
        $this->productsOrder = $productsOrder;
    }

}