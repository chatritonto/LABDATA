<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Typeofcontrol;

/**
 * TypeofcontrolSearch represents the model behind the search form about `app\models\Typeofcontrol`.
 */
class TypeofcontrolSearch extends Typeofcontrol
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'Ref_product'], 'integer'],
            [['Name','Periodicity'], 'safe'],
            [['NOM', 'MIN', 'MAX', 'AVG'], 'number'],
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
        $query = Typeofcontrol::find();

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
            'NOM' => $this->NOM,
            'MIN' => $this->MIN,
            'MAX' => $this->MAX,
            'AVG' => $this->AVG,
            'Ref_product' => $this->Ref_product,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'Periodicity', $this->Periodicity]);

        return $dataProvider;
    }
}
