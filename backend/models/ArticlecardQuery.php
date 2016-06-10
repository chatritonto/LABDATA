<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Articlecard]].
 *
 * @see Articlecard
 */
class ArticlecardQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Articlecard[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Articlecard|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
