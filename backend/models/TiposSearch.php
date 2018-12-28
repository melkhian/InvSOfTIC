<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Tipos;

/**
 * TiposSearch represents the model behind the search form of `backend\models\Tipos`.
 */
class TiposSearch extends Tipos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['TiposId', 'TipoId_fk', 'TiposValo'], 'integer'],
            [['TiposDesc'], 'safe'],
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
        $query = Tipos::find();

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
            'TiposId' => $this->TiposId,
            'TipoId_fk' => $this->TipoId_fk,
            'TiposValo' => $this->TiposValo,
        ]);

        $query->andFilterWhere(['like', 'TiposDesc', $this->TiposDesc]);

        return $dataProvider;
    }
}
