<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "typeofcontrol".
 *
 * @property integer $id
 * @property string $Code
 * @property string $Name
 * @property string $Unit
 * @property string $NOM
 * @property string $MIN
 * @property string $MAX
 * @property string $AVG
 * @property string $Periodicity
 * @property integer $Ref_product
 *
 * @property Articlecard $refProduct
 */
class Typeofcontrol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'typeofcontrol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Name','Periodicity'], 'required'],
            [['NOM', 'MIN', 'MAX', 'AVG'], 'number'],
            [['Ref_product'], 'integer'],
            [['Periodicity'], 'string', 'max' => 50],
            [['Name'], 'string', 'max' => 100],
            [['Ref_product'], 'exist', 'skipOnError' => true, 'targetClass' => Articlecard::className(), 'targetAttribute' => ['Ref_product' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
           // 'Code' => Yii::t('app', 'Code'),
            'Name' => Yii::t('app', 'Name'),
          //  'Unit' => Yii::t('app', 'Unit'),
            'NOM' => Yii::t('app', 'Nom'),
            'MIN' => Yii::t('app', 'Min'),
            'MAX' => Yii::t('app', 'Max'),
            'AVG' => Yii::t('app', 'Avg'),
            'Periodicity' => Yii::t('app', 'Periodicity'),
            'Ref_product' => Yii::t('app', 'Ref Product'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRefProduct()
    {
        return $this->hasOne(Articlecard::className(), ['id' => 'Ref_product']);
    }
}
