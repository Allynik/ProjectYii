<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;

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
        $this->view->title = 'Страница товаров';
//        просто всё по категории_id вывожу
        $id != null ?  $product = Product::find()->where(['category_id' => $id])->asArray()->all() : $product = Product::find()->asArray()->all();
        return $this->render('product',compact('product'));
    }

}