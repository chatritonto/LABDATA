<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "production".
 *
 * @property integer $id
 * @property integer $Workno
 * @property integer $Line
 * @property string $Shift
 * @property string $Status
 * @property string $Date
 * @property integer $Watertemp
 * @property string $Enddate
 * @property string $Modifiedon
 * @property string $Reference
 * @property string $ProductName
 *
 * @property Labdata[] $labdatas
 */
class Production extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'production';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Workno', 'Line', 'Shift', 'Status', 'Date', 'Watertemp', 'Reference', 'ProductName'], 'required'],
            [['Workno', 'Line', 'Watertemp'], 'integer'],
            [['Date'], 'safe'],
            [['Shift', 'Status', 'Reference'], 'string', 'max' => 50],
            [['ProductName'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'Workno' => Yii::t('app', 'Workno'),
            'Line' => Yii::t('app', 'Line'),
            'Shift' => Yii::t('app', 'Shift'),
            'Status' => Yii::t('app', 'Status'),
            'Date' => Yii::t('app', 'Date'),
            'Watertemp' => Yii::t('app', 'Watertemp'),
          //  'Enddate' => Yii::t('app', 'Enddate'),
         //   'Modifiedon' => Yii::t('app', 'Modifiedon'),
            'Reference' => Yii::t('app', 'Reference'),
            'ProductName' => Yii::t('app', 'Product Name'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLabdatas()
    {
        return $this->hasMany(Labdata::className(), ['Lab_id' => 'id']);
    }
}
