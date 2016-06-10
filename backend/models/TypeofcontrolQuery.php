<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Typeofcontrol]].
 *
 * @see Typeofcontrol
 */
class TypeofcontrolQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Typeofcontrol[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Typeofcontrol|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
