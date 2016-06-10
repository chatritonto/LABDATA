<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $ProductCode
 * @property string $ProductName
 * @property string $Colour
 * @property string $Type
 * @property string $FinishType
 * @property string $DrawingNo
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ProductCode', 'ProductName', 'Colour', 'Type', 'FinishType', 'DrawingNo'], 'required'],
            [['ProductCode', 'Colour', 'Type', 'FinishType', 'DrawingNo'], 'string', 'max' => 50],
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
            'ProductCode' => Yii::t('app', 'Product Code'),
            'ProductName' => Yii::t('app', 'Product Name'),
            'Colour' => Yii::t('app', 'Colour'),
            'Type' => Yii::t('app', 'Type'),
            'FinishType' => Yii::t('app', 'Finish Type'),
            'DrawingNo' => Yii::t('app', 'Drawing No'),
        ];
    }

    /**
     * @inheritdoc
     * @return ProductsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ProductsQuery(get_called_class());
    }
}
