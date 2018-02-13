<?php /** @var \app\models\Order[] $itemsOrder */ ?>

<div class="container">
    <div class="row">

        <br/>

        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li>Управление заказами</li>
            </ul>
        </div>

        <h4>Список заказов</h4>

        <br/>


        <table>
            <tr>
                <th>ID заказа</th>
                <th>ID покупателя</th>
                <th>Дата оформления</th>
                <th>Статус</th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($itemsOrder as $order): ?>
                <tr>
                    <td>
                        <a href="/adminOrder/view/?id=<?= $order->id; ?>">
                            <?= $order->id; ?>
                        </a>
                    </td>
                    <td><?= $order->idUser; ?></td>
                    <td><?= $order->datetimeCreate; ?></td>
                    <td><?= $order->idOrderStatus; ?></td>
                    <td><a href="/adminOrder/view/?id=<?= $order->id; ?>">Смотреть</a></td>
                    <td><a href="/adminOrder/update/?id=<?= $order->id; ?>">Редактировать</a></td>
                    <td><a href="/adminOrder/delete/?id=<?= $order->id; ?>">Удалить</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>