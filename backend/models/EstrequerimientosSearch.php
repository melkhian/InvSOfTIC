<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Estrequerimientos;

/**
 * EstrequerimientosSearch represents the model behind the search form of `backend\models\Estrequerimientos`.
 */
class EstrequerimientosSearch extends Estrequerimientos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EReqId', 'ReqId_fk', 'TiposId_fk'], 'integer'],
            [['EReqEsta', 'EReqFech', 'EReqFechSist'], 'safe'],
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
        $query = Estrequerimientos::find();

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
            'EReqId' => $this->EReqId,
            'ReqId_fk' => $this->ReqId_fk,
            'TiposId_fk' => $this->TiposId_fk,
            'EReqFech' => $this->EReqFech,
            'EReqFechSist' => $this->EReqFechSist,
        ]);

        $query->andFilterWhere(['like', 'EReqEsta', $this->EReqEsta]);

        return $dataProvider;
    }
}
