<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "articlecard".
 *
 * @property integer $id
 * @property string $ProductCode
 * @property string $ProductName
 * @property string $Colour
 * @property string $Type
 * @property string $FinishType
 * @property string $DrawingNo
 * @property string $Date
 * @property string $Createby
 *
 * @property Typeofcontrol[] $typeofcontrols
 */
class Articlecard extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'articlecard';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductCode', 'ProductName', 'Colour', 'Type', 'FinishType', 'DrawingNo', 'Date', 'Createby'], 'required'],
            [['Date'], 'safe'],
            [['ProductCode', 'Colour', 'Type', 'FinishType', 'DrawingNo'], 'string', 'max' => 50],
            [['ProductName', 'Createby'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ProductCode' => Yii::t('app', 'Product Code'),
            'ProductName' => Yii::t('app', 'Product Name'),
            'Colour' => Yii::t('app', 'Colour'),
            'Type' => Yii::t('app', 'Type'),
            'FinishType' => Yii::t('app', 'Finish Type'),
            'DrawingNo' => Yii::t('app', 'Drawing No'),
            'Date' => Yii::t('app', 'Date'),
            'Createby' => Yii::t('app', 'Createby'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTypeofcontrols()
    {
        return $this->hasMany(Typeofcontrol::className(), ['Ref_product' => 'id']);
    }

    /**
     * @inheritdoc
     * @return ArticlecardQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArticlecardQuery(get_called_class());
    }
}
