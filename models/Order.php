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
    public $datetimeCreate;


    public function __construct($idUser = null, $productsOrder = null, $idOrderStatus = 1, $datetimeCreate = null, $id = null)
    {
        $this->id;
        $this->datetimeCreate = date("Y-m-d H:i:s");
        $this->idUser = $idUser;
        $this->idOrderStatus = $idOrderStatus;
        $this->productsOrder = $productsOrder;
    }

}