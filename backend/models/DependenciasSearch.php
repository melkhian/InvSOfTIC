<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Dependencias;

/**
 * DependenciasSearch represents the model behind the search form of `backend\models\Dependencias`.
 */
class DependenciasSearch extends Dependencias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['DepId', 'TiposId_fk1', 'TiposId_fk2'], 'integer'],
            [['DepNomb', 'DepEnca', 'DepTele', 'DepDire', 'DepCorr'], 'safe'],
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
        $query = Dependencias::find();

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
            'DepId' => $this->DepId,
            'TiposId_fk1' => $this->TiposId_fk1,
            'TiposId_fk2' => $this->TiposId_fk2,
        ]);

        $query->andFilterWhere(['like', 'DepNomb', $this->DepNomb])
            ->andFilterWhere(['like', 'DepEnca', $this->DepEnca])
            ->andFilterWhere(['like', 'DepTele', $this->DepTele])
            ->andFilterWhere(['like', 'DepDire', $this->DepDire])
            ->andFilterWhere(['like', 'DepCorr', $this->DepCorr]);

        return $dataProvider;
    }
}
