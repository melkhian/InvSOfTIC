<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Interfaces;

/**
 * InterfacesSearch represents the model behind the search form of `backend\models\Interfaces`.
 */
class InterfacesSearch extends Interfaces
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['INTEID'], 'integer'],
            [['INTENOM', 'INTEDESC'], 'safe'],
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
        $query = Interfaces::find();

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
            'INTEID' => $this->INTEID,
        ]);

        $query->andFilterWhere(['like', 'INTENOM', $this->INTENOM])
            ->andFilterWhere(['like', 'INTEDESC', $this->INTEDESC]);

        return $dataProvider;
    }
}
