<h1 class="text-center mb-5 my-5">Товары</h1>
<div class="row">
    <?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\helpers\Url;

    ?>
    <?=
    GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                    'id',
                    'title',
                    'description',
                    'price',
                    'category_id',
                ['class' => 'yii\grid\ActionColumn',
                    'urlCreator' => function ($action, $dataProvider, $key, $index) {
                        return Url::to(['dbpage/'.'prodview', 'id' => $dataProvider->id]);
                    }

                ],
            ],
    ]);
    ?>
</div>

