<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Intecoma;

/**
 * IntecomaSearch represents the model behind the search form of `backend\models\Intecoma`.
 */
class IntecomaSearch extends Intecoma
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IcomId', 'IntiId_fk', 'ComId_fk'], 'integer'],
            [['IcomFunc', 'IcomDesc'], 'safe'],
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
        $query = Intecoma::find();

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
            'IcomId' => $this->IcomId,
            'IntiId_fk' => $this->IntiId_fk,
            'ComId_fk' => $this->ComId_fk,
        ]);

        $query->andFilterWhere(['like', 'IcomFunc', $this->IcomFunc])
            ->andFilterWhere(['like', 'IcomDesc', $this->IcomDesc]);

        return $dataProvider;
    }
}
