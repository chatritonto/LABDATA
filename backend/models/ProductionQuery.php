<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Production]].
 *
 * @see Production
 */
class ProductionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Production[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Production|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
