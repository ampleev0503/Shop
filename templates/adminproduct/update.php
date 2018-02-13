<?php /** @var \app\models\Category[] $itemsCategory */ ?>
<?php /** @var \app\models\Product $product */ ?>


<div class="container">
    <div class="row">

        <br/>

        <div class="breadcrumbs">
            <ul class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="/adminproduct">Управление товарами</a></li>
                <li>Карточка товара</li>
            </ul>
        </div>

        <br/>

        <div>
            <div>
                <form method="post" enctype="multipart/form-data">

                    <p>Название товара</p>
                    <input type="text" name="name" placeholder="" value="<?= $product->name?>" required>

                    <p>Стоимость, $</p>
                    <input type="text" name="price" placeholder="" value="<?= $product->price?>" required>

                    <p>Категория</p>
                    <select name="category_id">
                        <?php if (is_array($itemsCategory)): ?>
                            <?php foreach ($itemsCategory as $category): ?>
                                <option value="<?php echo $category->id; ?>"
                                    <?php if ($product->idCategory == $category->id) echo ' selected="selected"'; ?>>
                                    <?php echo $category->categoryName; ?>
                                </option>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </select>

                    <br/><br/>

                    <p>Изображение товара</p>
                    <img src="<?= $product->image ?>" width="200" alt="" />
                    <input type="file" name="image" placeholder="" value="">

                    <p>Детальное описание</p>
                    <textarea name="description"><?= $product->description?></textarea>

                    <br/><br/>

                    <input type="submit" name="submit" value="Сохранить">

                    <br/><br/>

                </form>
            </div>
        </div>

    </div>
</div>