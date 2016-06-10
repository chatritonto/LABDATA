<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Gcontrollist]].
 *
 * @see Gcontrollist
 */
class GcontrollistQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Gcontrollist[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Gcontrollist|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
