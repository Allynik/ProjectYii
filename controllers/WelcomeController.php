<?php

namespace app\controllers;

use app\models\Application;

class WelcomeController extends AppController
{
    public function actionIndex()
    {
        $this->layout = 'welcome';
        $this->view->title = 'Главная страница';
        $model = new Application();
        if($model->load(\Yii::$app->request->post()) && $model->validate() && $model->save()){
            var_dump($model['email']);
            \Yii::$app->session->setFlash('success','Ваш запрос успешно отправлен!');
        }
        return $this->render('index', compact('model'));
    }
}