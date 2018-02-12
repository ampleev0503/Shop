<?php /** @var \app\models\Category[] $itemsCategory */ ?>

<div class="container">
    <div class="row">

        <br/>

        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li>Управление категориями</li>
            </ul>
        </div>

        <a href="/admincategory/create">Добавить категорию</a>

        <h4>Список категорий</h4>

        <br/>

        <table>
            <tr>
                <th>ID категории</th>
                <th>Название категории</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach ($itemsCategory as $category): ?>
                <tr>
                    <td><?= $category->id; ?></td>
                    <td><?= $category->categoryName; ?></td>
                    <td><a href="/admincategory/update/?id=<?= $category->id; ?>">Редактировать</a></td>
                    <td><a href="/admincategory/delete/?id=<?= $category->id; ?>">Удалить</a></td>
                </tr>
            <?php endforeach; ?>
        </table>

    </div>
</div>