<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use yii\data\ActiveDataProvider;

class DbpageController extends AppController
{
    public function actionCategory()
    {
        $this->layout = 'welcome';
        $this->view->title = 'Страница категорий';
        $cat = Category::find()->asArray()->all();
        return $this->render('category',compact('cat'));
    }

    public function actionProduct($id = null, $product = null)
    {
        $this->layout = 'welcome';
        $this->view->title = 'Страница товаров';
//        просто всё по категории_id вывожу
        $id != null ?  $dataProvider = new ActiveDataProvider([
            'query' => Product::find()->where(['category_id' => $id])]) : $dataProvider = new ActiveDataProvider([
            'query' => Product::find(),
                'pagination' => [
                    'pageSize' => 3
                ],
            ]);
        return $this->render('product',compact('product','dataProvider'));
    }

}