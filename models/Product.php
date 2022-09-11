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

}