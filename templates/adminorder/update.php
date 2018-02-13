<?php /** @var \app\models\Order $order */ ?>

<div class="container">
    <div class="row">

        <br/>

        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="/adminOrder">Управление заказами</a></li>
                <li>Редактировать заказ</li>
            </ul>
        </div>


        <h4>Редактировать заказ #<?= $order->id; ?></h4>

        <br/>

        <div>
            <div>
                <form method="post">

                    <p>ID клиента: <?= $order->idUser; ?></p>

                    <p>Дата оформления заказа: <?= $order->datetimeCreate; ?></p>

                    <p>Статус</p>
                    <select name="status">
                        <option value="1" <?php if ($order->idOrderStatus == 1) echo ' selected="selected"'; ?>>Новый заказ</option>
                        <option value="2" <?php if ($order->idOrderStatus == 2) echo ' selected="selected"'; ?>>В обработке</option>
                        <option value="3" <?php if ($order->idOrderStatus == 3) echo ' selected="selected"'; ?>>Доставляется</option>
                        <option value="4" <?php if ($order->idOrderStatus == 4) echo ' selected="selected"'; ?>>Закрыт</option>
                    </select>
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Сохранить">
                </form>
            </div>
        </div>

    </div>
</div>