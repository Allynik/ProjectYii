<?php

namespace app\models;

use yii\db\ActiveRecord;

class Application extends ActiveRecord
{

    public static function tableName()
    {
        return 'application';
    }
    public function rules()
    {
        return [
            [['name','text','email'], 'required'],
            [['name'], 'string', 'min' =>3, 'max' =>20],
            [['text'], 'string','max' =>100],
            ['email','email']
        ];
    }
    public function attributeLabels()
    {
        return [
            'name' => 'Имя',
            'text' => 'Сообщнение',
            'email' => 'Электронная почта'
        ];
    }
}