<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Labdata]].
 *
 * @see Labdata
 */
class LabdataQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Labdata[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Labdata|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
