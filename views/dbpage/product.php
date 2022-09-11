<h1 class="text-center mb-5 my-5">Товары</h1>
<div class="row">
    <?php use yii\helpers\Html;

    foreach ($product as $prod): ?>
        <div class="col-md-3 mb-5">
            <div class="card card-category card_str ">
                    <?=Html::img("@web/images/{$prod['image']}",['style'=>'width:100%','alt'=>'Картинка'])?>
                    <h1><?= $prod['title']?></h1>
                <hr>
                <p>Описание: <?= $prod['description']?></p>
                <hr>
                <p>Цена: <?= $prod['price']?> р. за шт.</p>
            </div>
        </div>
    <?php endforeach;?>
</div>