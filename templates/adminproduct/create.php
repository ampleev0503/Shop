<?php /** @var \app\models\Category[] $itemsCategory */ ?>

<div class="container">
    <div class="row">

        <br/>

        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="/adminproduct">Управление товарами</a></li>
                <li>Создание товара</li>
            </ul>
        </div>


        <h4>Добавить новый товар</h4>

        <br/>

        <div>
            <div>
                <form method="post" enctype="multipart/form-data">

                    <p>Название товара</p>
                    <input type="text" name="name" placeholder="" value="" required>

                    <p>Стоимость, $</p>
                    <input type="text" name="price" placeholder="" value="" required>

                    <p>Категория</p>
                    <select name="category_id">
                        <?php if (is_array($itemsCategory)): ?>
                            <?php foreach ($itemsCategory as $category): ?>
                                <option value="<?= $category->id; ?>">
                                    <?= $category->categoryName; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <br/><br/>

                    <p>Изображение товара</p>
                    <input type="file" name="image" placeholder="" value="">

                    <p>Детальное описание</p>
                    <textarea name="description"></textarea>

                    <br/><br/>

                    <input type="submit" name="submit" value="Сохранить">

                    <br/><br/>

                </form>
            </div>
        </div>

    </div>
</div>