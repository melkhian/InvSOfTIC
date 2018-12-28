<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Rolintecoma;

/**
 * RolintecomaSearch represents the model behind the search form of `backend\models\Rolintecoma`.
 */
class RolintecomaSearch extends Rolintecoma
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['RIComId', 'RolId_fk', 'IComid_fk'], 'integer'],
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
        $query = Rolintecoma::find();

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
            'RIComId' => $this->RIComId,
            'RolId_fk' => $this->RolId_fk,
            'IComid_fk' => $this->IComid_fk,
        ]);

        return $dataProvider;
    }
}
