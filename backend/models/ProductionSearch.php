<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Production;

/**
 * ProductionSearch represents the model behind the search form about `app\models\Production`.
 */
class ProductionSearch extends Production
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Workno', 'Line', 'Watertemp'], 'integer'],
            [['Shift', 'Status', 'Date', 'Enddate', 'Modifiedon', 'Reference', 'ProductName'], 'safe'],
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
        $query = Production::find();

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
            'Workno' => $this->Workno,
            'Line' => $this->Line,
            'Date' => $this->Date,
            'Watertemp' => $this->Watertemp,
            'Enddate' => $this->Enddate,
            'Modifiedon' => $this->Modifiedon,
        ]);

        $query->andFilterWhere(['like', 'Shift', $this->Shift])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Reference', $this->Reference])
            ->andFilterWhere(['like', 'ProductName', $this->ProductName]);

        return $dataProvider;
    }
}
