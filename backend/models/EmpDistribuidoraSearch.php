<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Empdistribuidora;

/**
 * EmpdistribuidoraSearch represents the model behind the search form of `backend\models\Empdistribuidora`.
 */
class EmpdistribuidoraSearch extends Empdistribuidora
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EDisId', 'TiposId_fk'], 'integer'],
            [['EDisNit', 'EDisNomb', 'EDisDire', 'EDisCont', 'EDisTele', 'EDisCorr'], 'safe'],
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
        $query = Empdistribuidora::find();

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
            'EDisId' => $this->EDisId,
            'TiposId_fk' => $this->TiposId_fk,
        ]);

        $query->andFilterWhere(['like', 'EDisNit', $this->EDisNit])
            ->andFilterWhere(['like', 'EDisNomb', $this->EDisNomb])
            ->andFilterWhere(['like', 'EDisDire', $this->EDisDire])
            ->andFilterWhere(['like', 'EDisCont', $this->EDisCont])
            ->andFilterWhere(['like', 'EDisTele', $this->EDisTele])
            ->andFilterWhere(['like', 'EDisCorr', $this->EDisCorr]);

        return $dataProvider;
    }
}
