<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "labdata".
 *
 * @property integer $id
 * @property string $ISCAV
 * @property integer $MoldNo
 * @property string $Height
 * @property string $Weight
 * @property string $Fillful
 * @property string $Load
 * @property string $Impact
 * @property string $Pressure
 * @property string $Origin
 * @property string $Brimful
 * @property integer $Lab_id
 *
 * @property Production $lab
 */
class Labdata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'labdata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ISCAV', 'MoldNo'], 'required'],
            [['MoldNo', 'Lab_id'], 'integer'],
            [['Height', 'Weight', 'Fillful', 'Load', 'Impact', 'Pressure', 'Origin', 'Brimful'], 'number'],
            [['ISCAV'], 'string', 'max' => 5],
            [['Lab_id'], 'exist', 'skipOnError' => true, 'targetClass' => Production::className(), 'targetAttribute' => ['Lab_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'ISCAV' => Yii::t('app', 'Iscav'),
            'MoldNo' => Yii::t('app', 'Mold No'),
            'Height' => Yii::t('app', 'Height'),
            'Weight' => Yii::t('app', 'Weight'),
            'Fillful' => Yii::t('app', 'Fillful'),
            'Load' => Yii::t('app', 'Load'),
            'Impact' => Yii::t('app', 'Impact'),
            'Pressure' => Yii::t('app', 'Pressure'),
            'Origin' => Yii::t('app', 'Origin'),
            'Brimful' => Yii::t('app', 'Brimful'),
            'Lab_id' => Yii::t('app', 'Lab ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLab()
    {
        return $this->hasOne(Production::className(), ['id' => 'Lab_id']);
    }
}
