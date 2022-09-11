<?php

namespace app\controllers;

use app\models\Category;

class DbpageController extends AppController
{

    public function actionCategory()
    {
        $this->layout = 'welcome';
        $this->view->title = 'Страница категорий';
        $cat = Category::find()->asArray()->all();
        return $this->render('category',compact('cat'));
    }

    public function actionProduct($id = null)
    {
        $this->layout = 'welcome';
        $this->view->title = 'Главная страница';
        return $this->render('product');
    }

}