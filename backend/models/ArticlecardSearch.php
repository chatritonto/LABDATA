<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Articlecard;

/**
 * ArticlecardSearch represents the model behind the search form about `app\models\Articlecard`.
 */
class ArticlecardSearch extends Articlecard
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['ProductCode', 'ProductName', 'Colour', 'Type', 'FinishType', 'DrawingNo', 'Date', 'Createby'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Articlecard::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'Date' => $this->Date,
        ]);

        $query->andFilterWhere(['like', 'ProductCode', $this->ProductCode])
            ->andFilterWhere(['like', 'ProductName', $this->ProductName])
            ->andFilterWhere(['like', 'Colour', $this->Colour])
            ->andFilterWhere(['like', 'Type', $this->Type])
            ->andFilterWhere(['like', 'FinishType', $this->FinishType])
            ->andFilterWhere(['like', 'DrawingNo', $this->DrawingNo])
            ->andFilterWhere(['like', 'Createby', $this->Createby]);

        return $dataProvider;
    }
}
