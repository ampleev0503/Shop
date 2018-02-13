<?php /** @var \app\models\Order $order */ ?>
<?php /** @var \app\models\Product[] $itemsProduct */ ?>

<div class="container">
    <div class="row">

        <br/>

        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="/adminOrder">Управление заказами</a></li>
                <li>Просмотр заказа</li>
            </ul>
        </div>


        <h4>Просмотр заказа #<?= $order->id; ?></h4>
        <br/>




        <h5>Информация о заказе</h5>
        <table>
            <tr>
                <td>Номер заказа</td>
                <td><?= $order->id; ?></td>
            </tr>
            <tr>
                <td>ID клиента</td>
                <td><?= $order->idUser; ?></td>
            </tr>
            <tr>
                <td><b>Статус заказа</b></td>
                <td><?= $order->idOrderStatus ?></td>
            </tr>
            <tr>
                <td><b>Дата заказа</b></td>
                <td><?= $order->datetimeCreate; ?></td>
            </tr>
        </table>

        <h5>Товары в заказе</h5>

        <table>
            <tr>
                <th>ID товара</th>
                <th>Название</th>
                <th>Цена</th>
                <th>Количество</th>
            </tr>
            <?php foreach ($itemsProduct as $product): ?>
                <tr>
                    <td><?= $product->id; ?></td>
                    <td><?= $product->name; ?></td>
                    <td>$<?= $product->price; ?></td>
                    <td><?= $productsQuantity[$product->id]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>