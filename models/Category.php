<?php

namespace app\models;

use yii\db\ActiveRecord;

class Category extends ActiveRecord {

     public static function tableName()
     {
         parent::tableName();
         return 'category';
     }

     public function getProducts(){
         return $this->hasMany(Product::class, ['category_id' => 'id']);
     }


}