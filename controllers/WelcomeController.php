<?php

namespace app\controllers;

class WelcomeController extends AppController
{
    public function actionIndex()
    {
        $this->layout = 'welcome';
        $this->view->title = 'Главная страница';
        return $this->render('index');
    }
}