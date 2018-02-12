<?php /** @var \app\models\Category $category */ ?>

<div class="container">
    <div class="row">

        <br/>

        <div class="breadcrumbs">
            <ol class="breadcrumb">
                <li><a href="/admin">Админпанель</a></li>
                <li><a href="/adminCategory">Управление категориями</a></li>
                <li>Редактировать категорию</li>
            </ol>
        </div>


        <h4>Редактировать категорию "<?= $category->categoryName; ?>"</h4>

        <br/>

        <div>
            <div>
                <form method="post">

                    <p>Название</p>
                    <input type="text" name="name" placeholder="" value="<?= $category->categoryName; ?>" required>

                    <br><br>

                    <input type="submit" name="submit" value="Сохранить">
                </form>
            </div>
        </div>
    </div>
</div>