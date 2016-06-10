<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Controllist]].
 *
 * @see Controllist
 */
class ControllistQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Controllist[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Controllist|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
