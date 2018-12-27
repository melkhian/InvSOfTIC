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
            [['DEPID', 'DEPTIPO'], 'integer'],
            [['DEPNOMBENT', 'DEPENCARGADO', 'DEPCARGO', 'DEPTELEFONO', 'DEPDIRECCION', 'DEPMAIL'], 'safe'],
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
            'DEPID' => $this->DEPID,
            'DEPTIPO' => $this->DEPTIPO,
        ]);

        $query->andFilterWhere(['like', 'DEPNOMBENT', $this->DEPNOMBENT])
            ->andFilterWhere(['like', 'DEPENCARGADO', $this->DEPENCARGADO])
            ->andFilterWhere(['like', 'DEPCARGO', $this->DEPCARGO])
            ->andFilterWhere(['like', 'DEPTELEFONO', $this->DEPTELEFONO])
            ->andFilterWhere(['like', 'DEPDIRECCION', $this->DEPDIRECCION])
            ->andFilterWhere(['like', 'DEPMAIL', $this->DEPMAIL]);

        return $dataProvider;
    }
}
