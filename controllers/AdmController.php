<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;

class AdmController extends AppController
{

    public function actionTest()
    {
        $this->layout = 'welcome';
        $this->view->title = 'Страница тестирования';
        $category = Category::find()->asArray()->all();
        $product = Product::find()->asArray()->all();
        $newcat = new Category();
        $newprod = new Product();
        if($newprod->load(\Yii::$app->request->post()) && $newprod->validate() && $newprod->save()){
            \Yii::$app->session->setFlash('success','Создано!');
        }
        if($newcat->load(\Yii::$app->request->post()) && $newcat->validate() && $newcat->save()){
            \Yii::$app->session->setFlash('success','Создано!');
        }

        return $this->render('test', compact('category','product','newcat','newprod'));
    }

}