<?php

namespace frontend\models;

use Yii;

use yii\base\Model;
use yii\web\UploadedFile;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property integer $category
 * @property integer $sub_category
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'category', 'sub_category'], 'required'],
            [['description'], 'string'],
            [['category', 'sub_category'], 'string'],
            [['name'], 'string', 'max' => 100],
           [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'description' => 'Description',
            'category' => 'Category',
            'sub_category' => 'Sub Category',
            'imageFile'=>'Product Image'
        ];
    }
     public function saveP($img)
    {
         $model=new Product();
         $model->name=$this->name;
         $model->description=$this->description;
         $model->category=$this->category;
         $model->sub_category=$this->sub_category;
         $model->imageFile=$img;
         $model->save();
         return $model;
       
    }
}
