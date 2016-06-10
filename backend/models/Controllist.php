<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "controllist".
 *
 * @property integer $id
 * @property string $Code
 * @property string $Name
 * @property string $Unit
 */
class Controllist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'controllist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Code', 'Name', 'Unit'], 'required'],
            [['Code', 'Name', 'Unit'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Code' => Yii::t('app', 'Code'),
            'Name' => Yii::t('app', 'Name'),
            'Unit' => Yii::t('app', 'Unit'),
        ];
    }

    /**
     * @inheritdoc
     * @return ControllistQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ControllistQuery(get_called_class());
    }
}
