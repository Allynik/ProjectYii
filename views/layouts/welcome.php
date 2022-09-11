<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

$this->registerCsrfMetaTags();
\app\assets\AppAsset::register($this);
?>
<?php $this->beginPage()?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= Html::encode($this->title)?></title>
    <?php $this->head()?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody()?>
<div class="header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= Url::to('../index')?>"><?= Yii::$app->name?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Переключатель навигации">
                <span class="navbar-toggler-icon"></span>
            </button>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= Url::to('../category')?>">Категории</a>
                </li>
                <li class="nav-item" style="padding-right: 100px">
                    <a class="nav-link" href="<?= Url::to('../product')?>">Все товары</a>
                </li>

            </ul>
        </div>
    </nav>
</div>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container p-0">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>
<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div class="row text-muted">
            <div class="col-md-6 text-center text-md-start">&copy; <?=Yii::$app->name ?> <?= date('Y') ?></div>
            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
        </div>
    </div>
</footer>
<?php $this->endBody()?>
</body>
</html>
<?php $this->endPage() ?>