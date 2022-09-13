<h1 class="text-center mb-5 my-5">Товары</h1>
<div class="row">
    <?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    ?>
    <?=
    GridView::widget([
            'dataProvider' => $dataProvider,

    ]);
    ?>
</div>

