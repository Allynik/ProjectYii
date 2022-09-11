<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }

    public function rules()
    {
        return [
            [['title','image'], 'required'],
            [['title'], 'string', 'max' =>100],
        ];
    }
    public function attributeLabels()
    {
        return [
            'title' => 'Название категории',
            'image' => 'Картинка'
        ];
    }
}