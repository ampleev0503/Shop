<?php /** @var \app\models\Product[] $itemsProduct */ ?>

<div class="container">
    <div class="row">

        <br/>

        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li>Управление товарами</li>
            </ul>
        </div>

        <a href="/adminproduct/create">Добавить товар</a>

        <h4>Список товаров</h4>

        <br/>

        <table>
            <tr>
                <th>ID product</th>
                <th>Name Product</th>
                <th>Price</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($itemsProduct as $product): ?>
                <tr>
                    <td><?php echo $product->id; ?></td>
                    <td><?php echo $product->name; ?></td>
                    <td><?php echo $product->price ?></td>
                    <td><a href="/adminproduct/update/?id=<?= $product->id ?>">Редактировать </a></td>
                    <td></td>
                    <td><a href="/adminproduct/delete/?id=<?= $product->id ?>">Удалить </a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>