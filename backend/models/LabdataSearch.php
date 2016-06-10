<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Labdata;

/**
 * LabdataSearch represents the model behind the search form about `app\models\Labdata`.
 */
class LabdataSearch extends Labdata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'MoldNo', 'Lab_id'], 'integer'],
            [['ISCAV'], 'safe'],
            [['Height', 'Weight', 'Fillful', 'Load', 'Impact', 'Pressure', 'Origin', 'Brimful'], 'number'],
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
        $query = Labdata::find();

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
            'MoldNo' => $this->MoldNo,
            'Height' => $this->Height,
            'Weight' => $this->Weight,
            'Fillful' => $this->Fillful,
            'Load' => $this->Load,
            'Impact' => $this->Impact,
            'Pressure' => $this->Pressure,
            'Origin' => $this->Origin,
            'Brimful' => $this->Brimful,
            'Lab_id' => $this->Lab_id,
        ]);

        $query->andFilterWhere(['like', 'ISCAV', $this->ISCAV]);

        return $dataProvider;
    }
}
