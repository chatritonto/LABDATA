<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "period".
 *
 * @property integer $id
 * @property string $Code
 * @property string $Name
 */
class Period extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'period';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Code', 'Name'], 'required'],
            [['Code'], 'string', 'max' => 50],
            [['Name'], 'string', 'max' => 100],
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
        ];
    }

    /**
     * @inheritdoc
     * @return PeriodQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PeriodQuery(get_called_class());
    }
}
