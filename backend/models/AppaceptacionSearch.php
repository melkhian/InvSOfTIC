<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Appaceptacion;

/**
 * AppaceptacionSearch represents the model behind the search form of `backend\models\Appaceptacion`.
 */
class AppaceptacionSearch extends Appaceptacion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AAceId', 'AppId_fk'], 'integer'],
            [['AAceNomb', 'AAceCarg', 'AAceArea'], 'safe'],
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
        $query = Appaceptacion::find();

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
            'AAceId' => $this->AAceId,
            'AppId_fk' => $this->AppId_fk,
        ]);

        $query->andFilterWhere(['like', 'AAceNomb', $this->AAceNomb])
            ->andFilterWhere(['like', 'AAceCarg', $this->AAceCarg])
            ->andFilterWhere(['like', 'AAceArea', $this->AAceArea]);

        return $dataProvider;
    }
}
