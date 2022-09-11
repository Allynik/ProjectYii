<?php

namespace app\controllers;

class DbpageController extends AppController
{

    public function actionCategory($id = null)
    {
        return $this->render('category',compact('id'));
    }

}