<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;

?>
<h1>Тестовая страница</h1>
<div class="row">
    <h1 class="text-center my-3">Категории</h1>
    <?php
    foreach ($category as $cat): ?>
        <div class="col-md-3 mb-5 " >
            <div class="card card-category card_str">
                <a href="<?=Url::to(['dbpage/product','id'=> $cat['id']]); ?>">
                    <?=Html::img("@web/images/{$cat['image']}",['style'=>'width:100%','alt'=>'Картинка'])?>
                    <h1><?= $cat['title']?></h1>
                </a>
            </div>
        </div>
    <?php endforeach;
    ?>
    <?php
    Pjax::begin(); ?>
    <?= Alert::widget() ?>
    <?php
    $form = ActiveForm::begin(
        [
            'id' => 'Category-form',
            'enableClientValidation' =>true,
            'options'=>[
                'class' => 'form-horizontal',
                'data' =>['pjax' => true],
            ]
        ]);?>

    <?= $form->field($newcat, 'title')->textInput(['placeholder'=>'Название категории','style'=>'margin-bottom:15px'])?>
    <?= $form->field($newcat, 'image')->textInput(['placeholder' =>'Картинка','style'=>'margin-bottom:15px'])?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Сохранить',[
                'class' => 'btn btn-primary ',
                'style' =>'margin:20px 0 20px 0',
            ])?>
        </div>
    </div>

    <?php ActiveForm::end(); Pjax::end();?>
</div>
<div class="row">
    <hr>
    <h1 class="text-center">Товары</h1>
    <?php foreach ($product as $prod): ?>
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

    <?= Alert::widget() ?>
    <?php
    $form = ActiveForm::begin(
        [
            'id' => 'Product-form',
            'enableClientValidation' =>true,
            'options'=>[
                'class' => 'form-horizontal',

            ]
        ]);?>

    <?= $form->field($newprod, 'title')->textInput(['placeholder'=>'Название товара','style'=>'margin-bottom:15px'])?>
    <?= $form->field($newprod, 'description')->textarea(['placeholder' =>'Описание','style'=>'margin-bottom:15px'])?>
    <?= $form->field($newprod, 'price')->textInput(['placeholder' =>'Цена','style'=>'margin-bottom:15px'])?>
    <?= $form->field($newprod, 'image')->textarea(['placeholder' =>'Описание','style'=>'margin-bottom:15px'])?>
    <?= $form->field($newprod, 'category_id')->dropDownList(\app\models\Category::find()->select(['title','id'])->indexBy('id')->column(),['prompt'=>'Выберите категорию']);?>
    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton('Сохранить',[
                'class' => 'btn btn-primary ',
                'style' =>'margin:20px 0 20px 0',
            ])?>
        </div>
    </div>

    <?php ActiveForm::end();?>
</div>