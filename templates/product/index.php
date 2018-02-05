<?php /** @var \app\models\Product[] $items */ ?>
<style>
    .product_preview {
        width: 120px;
        height: 120px;
        padding: 8px;
        float: left;
        margin: 6px;
        border: 1px solid lightgray;
    }

    .product_preview:hover{
        border: 1px solid #8bd8ff;
    }
    .clearfix{
        clear: both;
    }
</style>
<h1>Каталог товаров</h1>

<div class="product_container">
    <?php foreach ($items as $item): ?>
        <a class="product_card" href="<?= $item->getUrl() ?>">
            <div class="product_preview">
                <div class="product_title">
                    <?= $item->name ?>
                </div>
                <div class="product_panel">
                    <div class="short_description">
                        <?= $item->getShortDescription() ?>
                    </div>
                </div>
            </div>
        </a>
    <?php endforeach; ?>
    <div class="clearfix"></div>
</div>