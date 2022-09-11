<?php
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use app\widgets\Alert;
use yii\helpers\Html;
?>
<div class="history">
    <h1>история компании <?= Yii::$app->name?></h1>
</div>
<div class="container">

    <div class="his">
        <div class="his__text">
            <h2>История</h2>
            <h2>Компания «<?= Yii::$app->name?>» </h2>
            <p>Компания «<?= Yii::$app->name?>» была создана в 2011 году как компания, специализируемая в области строительства, реконструкции и ремонта объектов разной сложности и архитектуры.</p>
            <h2 class="way">ПРОЙДЕННЫЙ ПУТЬ</h2>
            <p> Наша организация выполнила более 30 разнообразных работ в различных районах Российской Федерации</p>
        </div>
        <div class="his__img"></div>
    </div>
    <div class="whyme">
        <div class="whyme__img"></div>
        <div class="whyme_text">
            <h2>ПОЧЕМУ МЫ</h2>
            <p>Основой успешной деятельности предприятия являются пристальное внимание к подготовке собственных кадров, долгосрочные отношения с заказчиками, взаимовыгодные отношения с партнерами и высокое качество предоставляемых услуг.
                Мы строим надежные решения на годы, выстраивая надежные отношения на десятилетия.</p>
            <div class="whyme__icon">
                <div class="tex">
                    <?=Html::img('@web/images/Vector.png') ?>
                    <p>Передовые технологии</p>
                </div>
                <div class="specialists">
                    <?= Html::img('@web/images/vector2.png')?>
                    <p>Выполнение в точный срок</p>
                </div>
                <div class="time">
                    <?= Html::img('@web/images/vector3.png')?>
                    <p>Опытные специалисты</p>
                </div>
                <div class="solutions">
                    <?= Html::img('@web/images/vector4.png')?>
                    <p>Оптимальные решения</p>
                </div>
            </div>
        </div>

    </div>
    <div class="num">
        <center>МЫ В ЦИФРАХ</center>
        <div class="section-1">
            <p class="number">15</p>
            <span>Водители</span>
            <p class="number">67</p>
            <span>Электросварщики</span>
            <p class="number">23</p>
            <span>Машинисты крана</span>
        </div>
        <div class="section-2">
            <p class="number">42</p>
            <span>Инженерно-технические работники</span>
            <p class="number">5</p>
            <span>Электрослесари</span>
        </div>
    </div>
</div>

<div class="container">
    <row>
        <hr>
        <h2>У вас появились вопросы?</h2>
        <p>Оставьте заявку для нашего специалиста. Он расскажет подробнее о нас,
            ответит на все интересующие вас вопросы и подскажет оптимальное решение именно для
            вашей задачи.
        </p>
    </row>
     <div class="row">
         <?php
         Pjax::begin(); ?>
         <?= Alert::widget() ?>
         <?php
         $form = ActiveForm::begin(
             [
                 'id' => 'login-form',
                 'enableClientValidation' =>true,
                 'options'=>[
                     'class' => 'form-horizontal',
                     'data' =>['pjax' => true],
                 ]
             ]);?>

         <?= $form->field($model, 'name')->textInput(['placeholder'=>'Ваше имя','style'=>'margin-bottom:15px'])?>
         <?= $form->field($model, 'text')->textarea(['placeholder' =>'Суть вопроса','style'=>'margin-bottom:15px'])?>
         <?= $form->field($model, 'email')->textInput(['placeholder'=>'example@mail.ru','style'=>'margin-bottom:15px'])?>
         <div class="form-group">
             <div class="col-lg-offset-1 col-lg-11">
                 <?= \yii\helpers\Html::submitButton('Отправить',[
                     'class' => 'btn btn-primary ',
                     'style' =>'margin:20px 0 20px 0',
                 ])?>
             </div>
         </div>

         <?php ActiveForm::end(); Pjax::end();?>
     </div>
</div>