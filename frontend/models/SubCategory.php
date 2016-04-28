<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sub_category".
 *
 * @property integer $id
 * @property integer $category_id
 * @property string $sub_category
 */
class SubCategory extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sub_category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'sub_category'], 'required'],
            [['category_id'], 'integer'],
            [['sub_category'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category',
            'sub_category' => 'Sub Category',
        ];
    }
/*
     * find category by id
     */
    public function SubCategoryById($id)
    {
        $sub_category= SubCategory::findOne($id);
        return $sub_category->sub_category;
    }
}
