<?php /** @var \app\models\Product $product */ ?>

<div class="container">
    <div class="row">

        <br/>

        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="/adminproduct">Управление товарами</a></li>
                <li>Удалить товар</li>
            </ul>
        </div>


        <h4>Удалить товар #<?= $product->id; ?></h4>


        <p>Вы действительно хотите удалить этот товар?</p>

        <form method="post">
            <input type="submit" name="submit" value="Удалить" />
        </form>

    </div>
</div>