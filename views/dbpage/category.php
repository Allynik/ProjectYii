<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<h1 class="text-center" style="margin: 20px 0 20px 0">Категории товаров</h1>
<div class="row">
    <?php foreach ($cat as $category): ?>
    <div class="col-md-4 mb-5">
        <div class="card card-category">
            <a href="<?=Url::to(['dbpage/product','id'=> $category['id']]); ?>">
                <?=Html::img("@web/images/{$category['image']}",['style'=>'width:100%','alt'=>'Картинка'])?>
                <h1><?= $category['title']?></h1>
            </a>

        </div>
    </div>
    <?php endforeach;?>
</div>
