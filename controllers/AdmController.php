<?php

namespace app\controllers;

use app\models\Category;
use app\models\Product;
use yii\web\UploadedFile;

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
        if($newprod->load(\Yii::$app->request->post())){
            $newprod->image = UploadedFile::getInstance($newprod,'image');
            $newprod->image->saveAs("images/{$newprod->image->baseName}.{$newprod->image->extension}");
            $newprod->save(false);
//            return $this->redirect(['../product','id'=>$newprod->id]);
            return $this->redirect('../test');
        }
        if($newcat->load(\Yii::$app->request->post())){
            $newcat->image = UploadedFile::getInstance($newcat,'image');
            $newcat->image->saveAs("images/{$newcat->image->baseName}.{$newcat->image->extension}");
            $newcat->save(false);
//            return $this->redirect(['../product','id'=>$newprod->id]);
            return $this->redirect('../test');
        }
        return $this->render('test', compact('category','product','newcat','newprod'));
    }
}