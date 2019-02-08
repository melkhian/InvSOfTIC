<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Empsoporte;

/**
 * EmpsoporteSearch represents the model behind the search form of `backend\models\Empsoporte`.
 */
class EmpsoporteSearch extends Empsoporte
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ESopId', 'TiposId_fk1', 'TiposId_fk2'], 'integer'],
            [['ESopNit', 'ESopNomb', 'ESopDire', 'ESopCont', 'ESopTelePers', 'ESopTeleOfic', 'ESopCorr'], 'safe'],
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
        $query = Empsoporte::find();

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
            'ESopId' => $this->ESopId,
            'TiposId_fk1' => $this->TiposId_fk1,
            'TiposId_fk2' => $this->TiposId_fk2,
        ]);

        $query->andFilterWhere(['like', 'ESopNit', $this->ESopNit])
            ->andFilterWhere(['like', 'ESopNomb', $this->ESopNomb])
            ->andFilterWhere(['like', 'ESopDire', $this->ESopDire])
            ->andFilterWhere(['like', 'ESopCont', $this->ESopCont])
            ->andFilterWhere(['like', 'ESopTelePers', $this->ESopTelePers])
            ->andFilterWhere(['like', 'ESopTeleOfic', $this->ESopTeleOfic])
            ->andFilterWhere(['like', 'ESopCorr', $this->ESopCorr]);

        return $dataProvider;
    }
}
