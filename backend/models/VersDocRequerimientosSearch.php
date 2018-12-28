<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\VersDocRequerimientos;

/**
 * VersDocRequerimientosSearch represents the model behind the search form of `backend\models\VersDocRequerimientos`.
 */
class VersDocRequerimientosSearch extends VersDocRequerimientos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['VDReqId', 'ReqId_fk'], 'integer'],
            [['VDReqDocu', 'VDReqFechSist'], 'safe'],
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
        $query = VersDocRequerimientos::find();

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
            'VDReqId' => $this->VDReqId,
            'ReqId_fk' => $this->ReqId_fk,
            'VDReqFechSist' => $this->VDReqFechSist,
        ]);

        $query->andFilterWhere(['like', 'VDReqDocu', $this->VDReqDocu]);

        return $dataProvider;
    }
}
