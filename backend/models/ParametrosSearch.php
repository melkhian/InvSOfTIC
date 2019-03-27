<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Parametros;

/**
 * ParametrosSearch represents the model behind the search form of `backend\models\Parametros`.
 */
class ParametrosSearch extends Parametros
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ParId', 'ParMult', 'ParFall', 'TiposId_fk', 'ParTiemExpi'], 'integer'],
            [['ParContenido', 'ParHead', 'ParFoot', 'ParNemo'], 'safe'],
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
        $query = Parametros::find();

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
            'ParId' => $this->ParId,
            'ParMult' => $this->ParMult,
            'ParFall' => $this->ParFall,
            'TiposId_fk' => $this->TiposId_fk,
            'ParTiemExpi' => $this->ParTiemExpi,
        ]);

        $query->andFilterWhere(['like', 'ParContenido', $this->ParContenido])
            ->andFilterWhere(['like', 'ParHead', $this->ParHead])
            ->andFilterWhere(['like', 'ParFoot', $this->ParFoot])
            ->andFilterWhere(['like', 'ParNemo', $this->ParNemo]);

        return $dataProvider;
    }
}
