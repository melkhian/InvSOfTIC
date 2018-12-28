<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cambioalcance;

/**
 * CambioalcanceSearch represents the model behind the search form of `backend\models\Cambioalcance`.
 */
class CambioalcanceSearch extends Cambioalcance
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CAlcId', 'ProId_fk'], 'integer'],
            [['CAlcDesc', 'CAlcFechApro', 'CAlcFechInic', 'CAlcFechFina', 'CAlcFechSist'], 'safe'],
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
        $query = Cambioalcance::find();

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
            'CAlcId' => $this->CAlcId,
            'ProId_fk' => $this->ProId_fk,
            'CAlcFechApro' => $this->CAlcFechApro,
            'CAlcFechInic' => $this->CAlcFechInic,
            'CAlcFechFina' => $this->CAlcFechFina,
            'CAlcFechSist' => $this->CAlcFechSist,
        ]);

        $query->andFilterWhere(['like', 'CAlcDesc', $this->CAlcDesc]);

        return $dataProvider;
    }
}
