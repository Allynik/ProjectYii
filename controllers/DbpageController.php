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
        $dataProvider = new ActiveDataProvider([
            'query' => Category::find(),
        ]);
//        $cat = Category::find()->asArray()->all();
        return $this->render('category',compact('dataProvider'));
    }

    public function actionProduct($id = null)
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
        return $this->render('product',compact('dataProvider'));
    }

    public function actionCatview($id)
    {
        $this->layout = 'welcome';
        $this->view->title = 'Детальный обзор';
        $model = Category::findOne($id);
        return $this->render('catview',compact('model'));
    }
    public function actionProdview($id)
    {
        $this->layout = 'welcome';
        $this->view->title = 'Детальный обзор';
        $model = Product::findOne($id);
        return $this->render('prodview',compact('model'));
    }
}