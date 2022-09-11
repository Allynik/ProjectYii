<?php

namespace app\models;

use yii\base\Model;

class ContForm extends Model
{

    public $name;
    public $text;
    public $phone_number;

    public function rules()
    {
        return [
          [['name','text','phone_number'], 'required'],
          ['name','trim'],
        ];
    }
    public function attributeLabels()
    {
        return [
          'name' => 'Имя',
          'text' => 'Сообщнение',
          'phone_number' => 'Номер телефона'
        ];
    }

}