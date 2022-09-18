<?php

use yii\helpers\Url;
use yii\widgets\DetailView;

?>
<div class="my-5">
    <?= DetailView::widget([
        'model' => $model,
        'attributes'=>[
            'id',
            'title',
            'image:image',
        ]
    ])?>
</div>
