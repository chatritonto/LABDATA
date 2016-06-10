<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $CustomerCode
 * @property string $CustomerName
 * @property string $Address
 * @property string $Contact
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CustomerName', 'Address', 'Contact'], 'required'],
            [['CustomerName'], 'string', 'max' => 100],
            [['Address'], 'string', 'max' => 200],
            [['Contact'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CustomerCode' => Yii::t('app', 'Customer Code'),
            'CustomerName' => Yii::t('app', 'Customer Name'),
            'Address' => Yii::t('app', 'Address'),
            'Contact' => Yii::t('app', 'Contact'),
        ];
    }

    /**
     * @inheritdoc
     * @return CustomerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CustomerQuery(get_called_class());
    }
}
