<?php

namespace app\controllers;

class WelcomeController extends AppController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}