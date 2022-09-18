<?php

use yii\grid\GridView;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<h1 class="text-center" style="margin: 20px 0 20px 0">Категории товаров</h1>
<div class="row">
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'id',
            'title',
            ['class' => 'yii\grid\ActionColumn']
        ],
    ]);
    ?>
</div>
