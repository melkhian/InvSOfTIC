<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Appaplicaciones;

/**
 * AppaplicacionesSearch represents the model behind the search form of `backend\models\Appaplicaciones`.
 */
class AppaplicacionesSearch extends Appaplicaciones
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['AAplId', 'AppId_fk'], 'integer'],
            [['AAplLengServ', 'AAplVersApli', 'AAplBibl', 'AAplObse1'], 'safe'],
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
        $query = Appaplicaciones::find();

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
            'AAplId' => $this->AAplId,
            'AppId_fk' => $this->AppId_fk,
        ]);

        $query->andFilterWhere(['like', 'AAplLengServ', $this->AAplLengServ])
            ->andFilterWhere(['like', 'AAplVersApli', $this->AAplVersApli])
            ->andFilterWhere(['like', 'AAplBibl', $this->AAplBibl])
            ->andFilterWhere(['like', 'AAplObse1', $this->AAplObse1]);

        return $dataProvider;
    }
}
