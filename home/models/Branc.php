<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "branc".
 *
 * @property integer $id
 * @property string $brancName
 * @property string $brancCode
 * @property string $company
 */
class Branc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'branc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['brancName', 'brancCode', 'company'], 'required'],
            [['brancName', 'company'], 'string', 'max' => 30],
            [['brancCode'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'brancName' => 'Branc Name',
            'brancCode' => 'Branc Code',
            'company' => 'Company',
        ];
    }
}
