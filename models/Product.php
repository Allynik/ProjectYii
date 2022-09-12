<?php

namespace app\models;

use yii\db\ActiveRecord;

class Product extends ActiveRecord
{

    public static function tableName()
    {
        return 'service';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class,[
            'id' =>'category_id',
        ]);
    }

    public function rules()
    {
        return [
            [['title','image', 'description', 'price', 'category_id'], 'required'],
            [['title'], 'string', 'max' =>100],
            [['price'], 'string', 'min' => 1],
        ];
    }
    public function attributeLabels()
    {
        return [
            'title' => 'Название товара',
            'image' => 'Картинка',
            'description' => 'Описание',
            'price' => 'Цена',
            'category_id' => 'ID категории'
        ];
    }

}