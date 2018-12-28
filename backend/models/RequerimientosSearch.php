<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Requerimientos;

/**
 * RequerimientosSearch represents the model behind the search form of `backend\models\Requerimientos`.
 */
class RequerimientosSearch extends Requerimientos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ReqId', 'ProId_fk', 'TiposId_fk1', 'UsuId_fk', 'Tiposid_fk2', 'TiposId_fk3', 'TiposId_fk4'], 'integer'],
            [['ReqDesc', 'ReqFechTomaRequ', 'ReqFechSist'], 'safe'],
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
        $query = Requerimientos::find();

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
            'ReqId' => $this->ReqId,
            'ProId_fk' => $this->ProId_fk,
            'TiposId_fk1' => $this->TiposId_fk1,
            'UsuId_fk' => $this->UsuId_fk,
            'Tiposid_fk2' => $this->Tiposid_fk2,
            'TiposId_fk3' => $this->TiposId_fk3,
            'ReqFechTomaRequ' => $this->ReqFechTomaRequ,
            'ReqFechSist' => $this->ReqFechSist,
            'TiposId_fk4' => $this->TiposId_fk4,
        ]);

        $query->andFilterWhere(['like', 'ReqDesc', $this->ReqDesc]);

        return $dataProvider;
    }
}
