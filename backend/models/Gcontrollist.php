<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gcontrollist".
 *
 * @property integer $id
 * @property string $Name
 */
class Gcontrollist extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gcontrollist';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name'], 'required'],
            [['Name'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Name' => Yii::t('app', 'Name'),
        ];
    }

    /**
     * @inheritdoc
     * @return GcontrollistQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GcontrollistQuery(get_called_class());
    }
}
